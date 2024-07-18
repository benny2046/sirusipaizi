<?php

namespace App\Http\Controllers;

use App\Models\Pendamping;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PendampingController extends Controller
{
    public function index()
    {
        $pendampings = Pendamping::latest()->paginate(10);
        return view('pendamping.index', compact('pendampings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasiens = Pasien::all();
    return view('pendamping.create', compact('pasiens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'phone' => 'nullable|string|min:10|max:15',
            'provinsi' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'umur' => 'required|integer|min:0',
            'pendidikan' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
            'tanggal_masuk' => 'required|date',
        ]);

        // Simpan data pendamping
        $pendamping = Pendamping::create($request->all());

        // Jika ada pasien yang diinputkan, hubungkan dengan pendamping
        if ($request->filled('nama_pasien')) {
            $pasien = Pasien::where('nama', $request->input('nama_pasien'))->first();

            if ($pasien) {
                $pendamping->pasien()->associate($pasien);
                $pendamping->save();
            }
        }

        return redirect()->route('pendamping.index')->with('success', 'Data pendamping berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pendamping = Pendamping::find($id);
        return view('pendamping.show', compact('pendamping'));
    }

    public function edit(Pendamping $pendamping)
    {
        $pendamping = Pendamping::find($pendamping);
        return view('pendamping.edit', compact('pendamping'));
    }

    public function update(Request $request, Pendamping $pendamping)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'phone' => 'nullable|string|min:10|max:15',
            'provinsi' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'umur' => 'required|integer|min:0',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'tangal_masuk' => 'required|date',
            'pasien_id' => 'required|exists:pasien,id',
        ]);

        $pendamping->update($request->all());

        return redirect()->route('pendamping.index')->with('success', 'Data pendamping berhasil diperbarui.');
    }

    public function destroy(Pendamping $pendamping)
    {
        $pendamping->delete();

        return redirect()->route('pendamping.index')->with('success', 'Pendamping berhasil dihapus.');
    }
}
