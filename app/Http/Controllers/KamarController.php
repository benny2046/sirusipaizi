<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Pasien;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();

        return view('kamar.index', compact('kamars'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kamar' => 'required',
            'jumlah_kasur' => 'required|integer',

        ]);
        //status
        $kamar = new Kamar($data);
        $kamar->status = ($data['jumlah_kasur'] > 0) ? 'tersedia' : 'penuh';

        $kamar->save();

        return redirect()->route('kamar.index')
            ->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function show(Kamar $kamar)
    {
        return view('kamar.show', compact('kamar'));
    }

    public function edit(Kamar $kamar)
    {

        return view('kamar.edit', compact('kamar'));
    }

    public function update(Request $request, Kamar $kamar)
    {
        $data = $request->validate([
            'nama_kamar' => 'required',
            'jumlah_kasur' => 'required|integer',
        ]);

        // Mengatur status berdasarkan jumlah kasur
        $data['status'] = ($data['jumlah_kasur'] > 0) ? 'tersedia' : 'penuh';

        $kamar->update($data);

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil diubah');
    }

    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('kamar.index')
            ->with('success', 'Kamar berhasil dihapus.');
    }
    public function getRoomStatusCount($status)
    {
        $roomCount = Kamar::where('status', $status)->count();
        return $roomCount;
    }
    public function pasienRemoved($kamar_id)
    {
        $kamar = Kamar::find($kamar_id);

        // mengurangi jumlah kasur
        $kamar->jumlah_kasur++;

        // memeriksa jumlah kasur mencapai kapasitas atau tidak
        if ($kamar->jumlah_kasur >= 0) {
            $kamar->status = 'tersedia';
        }

        $kamar->save();
    }
}
