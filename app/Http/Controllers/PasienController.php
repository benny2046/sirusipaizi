<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kamar;
use App\Models\LaporanPasien;
use App\Models\Pendamping;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use log;

class PasienController extends Controller
{
    // Menampilkan semua data pasient
    public function index(Request $request)
    {
        $title = "Pasien";
        $query = $request->input('search');
        $queryBuilder = Pasien::query();

        if ($query) {
            $queryBuilder->where('nama', 'like', '%' . $query . '%');
        }
        $varpasien = $queryBuilder->latest('created_at')->get();

        return view('pasien.index', ['varpasien' => $varpasien, 'listtitle' => $title]);
    }

    // Menampilkan formulir untuk membuat pasien baru

    public function create()
    {
        $availableKamar = Kamar::where('status', 'tersedia')->first();

        if (!$availableKamar) {
            //tidak ada kasur yang tersedia
            return redirect()->route('pasien.index')->with('error', 'Semua kamar sudah penuh');
        }

        return view('pasien.create',  ['availableKamar' => $availableKamar]);
    }

    // Menyimpan data pasien yang baru dibuat
    public function store(Request $request)
    {
        // Validasi data input dari formulir
        $request->validate([
            'nama' => 'required|string|max:255',
            'phone' => 'nullable|string|min:10|max:15',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'jeniskelamin' => 'required|in:laki-laki,perempuan',
            'umur' => 'required|integer|min:0',
            'pendidikan' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
            'jenis_penyakit' => 'required|string',
            'kategori_penyakit' => 'required|string',
            'tanggal_masuk' => 'required|date',
            'kamar_id' => 'required|exists:kamar,id',
            'reservasi_id' => 'required|exists:reservasi,id',
        ]);

        //cari kamar dengan kasur tersedia
        $availableKamar = Kamar::where('status', 'tersedia')->first();

        if (!$availableKamar) {
            return redirect()->route('pasien.index')->with('error', 'Semua kamar penuh. Tidak dapat menambahkan pasien.');
        }

        $pasienData = [
            'nama' => $request->nama,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'jeniskelamin' => $request->jeniskelamin,
            'umur' => $request->umur,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'jenis_penyakit' => $request->jenis_penyakit,
            'kategori_penyakit' => $request->kategori_penyakit,
            'tanggal_masuk' => $request->tanggal_masuk,
            'kamar_id' => $availableKamar->id,
        ];

        $pasien = Pasien::create($pasienData);

        if ($request->filled('nama_pendamping')) {
            $pendampingData = [
                'nama' => $request->input('nama_pendamping'),
                'phone' => $request->input('phone_pendamping'),
                'provinsi' => $request->input('provinsi_pendamping'),
                'jenis_kelamin' => $request->input('jenis_kelamin_pendamping'),
                'umur' => $request->input('umur_pendamping'),
                'pendidikan' => $request->input('pendidikan_pendamping'),
                'pekerjaan' => $request->input('pekerjaan_pendamping'),
                'tanggal_masuk' => $request->input('tanggal_masuk_pendamping'),
            ];

            $pendamping = Pendamping::create($pendampingData);

            $pasien->pendamping()->associate($pendamping);
            $pasien->save();
        }
        // Ubah status kamar dan jumlah kasur
        $availableKamar->status = 'terpakai';
        $availableKamar->jumlah_kasur--;

        if ($availableKamar->jumlah_kasur == 0) {
            $availableKamar->status = 'penuh';
        }

        $availableKamar->save();

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    // Menampilkan detail pasien
    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.show', compact('pasien'));
    }

    // Menampilkan formulir untuk mengedit pasien
    public function edit(Pasien $pasien)
    {
        $kamars = Kamar::all(); // Mengambil semua data kamar
        return view('pasien.edit', compact('pasien', 'kamars'));
    }

    // Menyimpan perubahan pada pasien yang diedit
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'phone' => 'nullable|string|min:10|max:15',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'jeniskelamin' => 'required|in:laki-laki,perempuan',
            'umur' => 'required|integer|min:0',
            'pendidikan' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
            'jenis_penyakit' => 'required|string',
            'kategori_penyakit' => 'required|string',
            'tanggal_masuk' => 'required|date',
            'kamar_id' => 'required|exists:kamar,id',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui.');
    }

    // Menghapus pasien
    public function destroy(Pasien $pasien)
    {
        $reservasi_id = $pasien->reservasi_id;
        // Ubah status reservasi menjadi "selesai"
        $reservasi = Reservasi::find($reservasi_id);
        if ($reservasi) {
            $reservasi->status = 'Selesai';
            $reservasi->save();
        }

        // Ubah status_rawat pada tabel pasien menjadi "checkout"
        $pasien->status_rawat = 'checkout';
        $pasien->save();

        //softdelete
        $pasien->delete();

        // mengelola status kamar
        $kamar_id = $pasien->kamar_id;
        $kamarController = new KamarController();
        $kamarController->pasienRemoved($kamar_id);

        return redirect()->route('pasien.index')->with('success', 'Pasien selesai dirawat.');
    }
}
