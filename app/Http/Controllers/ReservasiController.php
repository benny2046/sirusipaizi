<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\LaporanPasien;
use App\Models\Pasien;
use App\Models\Pendamping;
use App\Models\Reservasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservasiController extends Controller
{
    public function index(Request $request)
    {
        $title = "Reservasi";
        $query = $request->input('search');
        $queryBuilder = Reservasi::query();

        if ($query) {
            $queryBuilder->where('nama', 'like', '%' . $query . '%');
        }

        if (Auth::user()->role === 'admin') {
            // Jika pengunjung adalah admin, ambil semua data reservasi
            $reservasi = Reservasi::latest()->get();
        } else {
            $reservasi = Reservasi::where('user_id', Auth()->user()->id)->latest()->get();
        }

        // Mengirim data ke view 'reservasi.index'
        return view('reservasi.index', compact('reservasi'));
    }
    public function create()
    {
        $availableKamar = Kamar::where('status', 'tersedia')->first();

        if (!$availableKamar) {
            //tidak ada kasur yang tersedia
            return redirect()->route('reservasi.index')->with('error', 'Semua kamar sudah penuh');
        }

        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $user_id = auth()->id();

        //upload bukti file PDF
        $file = $request->file('file');
        $file->storeAs('public/reservasi', $file->hashName());

        $dataReservasi = [
            // informasi data pasien
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
            'file' => $file->hashName(),
            'status' => 'menunggu',
            'user_id' => $user_id,
        ];

        // Memeriksa apakah data pendamping diisi atau tidak sebelum menyimpannya
        if ($request->filled('nama_pendamping')) {
            $dataReservasi['nama_pendamping'] = $request->nama_pendamping;
            $dataReservasi['umur_pendamping'] = $request->umur_pendamping;
            $dataReservasi['pendidikan_pendamping'] = $request->pendidikan_pendamping;
            $dataReservasi['pekerjaan_pendamping'] = $request->pekerjaan_pendamping;
            $dataReservasi['jeniskelaminpendamping'] = $request->jeniskelaminpendamping;
            $dataReservasi['phone_pendamping'] = $request->phone_pendamping;
            $dataReservasi['provinsi_pendamping'] = $request->provinsi_pendamping;
            $dataReservasi['tanggal_masuk_pendamping'] = $request->tanggal_masuk_pendamping;
        }

        // create reservasi
        Reservasi::create($dataReservasi);

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dibuat.');
    }


    public function setDiterima(Request $request, $id)
    {
        // Temukan reservasi berdasarkan ID
        $reservasi = Reservasi::findOrFail($id);

        // Ubah status menjadi "Diterima"
        Reservasi::find($id)->update([
            'status' => 'Diterima'
        ]);

        //cari kamar dengan kasur tersedia
        $availableKamar = Kamar::where('status', 'tersedia')->first();

        if (!$availableKamar) {
            return redirect()->route('pasien.index')->with('error', 'Semua kamar penuh. Tidak dapat menambahkan pasien.');
        }

        // Ubah status kamar dan jumlah kasur
        $availableKamar->status = 'terpakai';
        $availableKamar->jumlah_kasur--;

        if ($availableKamar->jumlah_kasur == 0) {
            $availableKamar->status = 'penuh';
        }
        $availableKamar->save();

        // Kirim data ke fungsi Pasien() pada controller Pasien
        $pasienData = [
            'nama_rsp' => 'Sumatera Barat',
            'nama' => $reservasi->nama,
            'phone' => $reservasi->phone,
            'alamat' => $reservasi->alamat,
            'kelurahan' => $reservasi->kelurahan,
            'kecamatan' => $reservasi->kecamatan,
            'kabupaten' => $reservasi->kabupaten,
            'provinsi' => $reservasi->provinsi,
            'jeniskelamin' => $reservasi->jeniskelamin,
            'umur' => $reservasi->umur,
            'pendidikan' => $reservasi->pendidikan,
            'pekerjaan' => $reservasi->pekerjaan,
            'jenis_penyakit' => $reservasi->jenis_penyakit,
            'kategori_penyakit' => $reservasi->kategori_penyakit,
            'status_rawat' => 'checkin',
            'tanggal_masuk' => $reservasi->tanggal_masuk,
            'kamar_id' => $availableKamar->id,
            'reservasi_id' => $reservasi->id,
        ];
        $pasien = Pasien::create($pasienData);

        $reservasi = Reservasi::findOrFail($id);
        if ($reservasi->nama_pendamping !== null) {
            $pendampingData = [
                'nama' => $reservasi->nama_pendamping,
                'umur' => $reservasi->umur_pendamping,
                'pendidikan' => $reservasi->pendidikan_pendamping,
                'pekerjaan' => $reservasi->pekerjaan_pendamping,
                'jenis_kelamin' => $reservasi->jeniskelaminpendamping,
                'phone' => $reservasi->phone_pendamping,
                'provinsi' => $reservasi->provinsi_pendamping,
                'tanggal_masuk' => $reservasi->tanggal_masuk_pendamping,
            ];

            $pendamping = Pendamping::create($pendampingData);
            $pasien->pendamping()->associate($pendamping);
            $pasien->save();
        }
        $reservasi_id = $reservasi->id;
        $pasien->reservasi_id = $reservasi_id;
        // $pasien->save();

        // Redirect atau lakukan tindakan lainnya setelah perubahan status
        return redirect()->route('reservasi.index')->with('success', 'Reservasi diterima.');
    }

    public function ditolak(Reservasi $reservasi, $id)
    {
        // Ubah status reservasi menjadi 'Ditolak'
        $reservasi->find($id)->update(['status' => 'Ditolak']);

        return redirect()->route('reservasi.index')->with('error', 'Reservasi ditolak.');
    }

    public function update(Request $request, $id)
    {
        // Validasi data dari form

        $reservasi = Reservasi::find($id);
        $reservasi->status = $request->status;
        $reservasi->save();

        // pengiriman pesan whatsapp
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui');
    }

    public function show($id)
    {
        $reservasi = Reservasi::with('user')->find($id);
        return view('reservasi.show', compact('reservasi'));
    }

    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus');
    }
}
