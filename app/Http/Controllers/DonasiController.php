<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use Illuminate\Support\Facades\Storage;

class DonasiController extends Controller
{
    // Menampilkan semua data donasi
    public function index()
    {
        //get donasi
        $donasis = Donasi::latest()->paginate(7);
        return view('donasi.index', compact('donasis'));
    }

    // Menampilkan formulir untuk membuat donasi baru
    public function create()
    {
        return view('donasi.create');
    }

    // Menyimpan data donasi yang baru dibuat
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_hp' => 'required',
            'jumlah' => 'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload bukti foto
        $image = $request->file('bukti');
        $image->storeAs('public/donasi', $image->hashName());

        // create donasi
        Donasi::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'jumlah' => $request->jumlah,
            'bukti' => $image->hashName()
        ]);

        //redirect to index
        return redirect()->route('donasi.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    // Menampilkan detail donasi
    public function show($id)
    {
        // get donasi by id
        $donasi = Donasi::find($id);
        // return view
        return view('donasi.show', compact('donasi'));
    }

    // Menampilkan formulir untuk mengedit donasi
    public function edit(Donasi $donasi)
    {
        return view('donasi.edit', compact('donasi'));
    }

    // Menyimpan perubahan pada donasi yang diedit
    public function update(Request $request, Donasi $donasi)
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required',
            'no_hp' => 'required',
            'jumlah' => 'required',
            'bukti' => 'image|mimes:jpeg,png,jpg,giv,svg|max:2048',
        ]);

        //check upload bukti
        if ($request->hasFile('bukti')) {
            //upload new image
            $bukti = $request->file('bukti');
            $bukti->storeAs('public/donasi', $bukti->hashName());

            //hapus bukti bukti
            Storage::delete('public/donasi/' . $donasi->bukti);

            //edit donasi
            $donasi->update([
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
                'jumlah' => $request->jumlah,
                'bukti' => $bukti->hashName()
            ]);
        } else {
            //upload donasi
            $donasi->update([
                'nama' => $request->nama,
                'no_hp' => $request->no_hp,
                'jumlah' => $request->jumlah
            ]);
        }

        // redirect to index
        return redirect()->route('donasi.index')->with(['success' => 'Data berhasil diubah!']);
    }

    // Menghapus donasi
    public function destroy(Donasi $donasi)
    {
        //delete bukti
        Storage::delete('public/donasi/' . $donasi->image);

        //delete donasi
        $donasi->delete();

        // redirect to index
        return redirect()->route('donasi.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
