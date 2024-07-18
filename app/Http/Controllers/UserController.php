<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function resetpassword(Request $request){
        $id = $request->id;

        if($request->password!=$request->password2){
            return redirect('/pengaturan-profile')->with('Gagal','Edit Gagal Password beda');
        }

        $update = User::where('id',$id)->update([
            'name'=>$request->nama,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
        ]);

        // return response()->json($update, 200);
        return redirect('/pengaturan-profile')->with('success','Ubah password berhasil');
    }
    public function index1(Request $request){
        return view('pengaturan.index');
    }
    public function edit2(Request $request){
        return view('auth.reset-password');
    }
    public function update2(Request $request, User $user)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('login')->with('success', 'Password berhasil diubah');
    }
    public function index(Request $request)
    {
        $title = "user";
        $query = $request->input('search');
        $queryBuilder = User::query();

        if ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%');
        }
        $varuser = $queryBuilder->latest()->paginate(10);

        return view('profile.index', [
            'varuser' => $varuser,
            'listtitle' => $title
        ]);
    }

    // public function edit($id)
    // {
    //     $user = User::find($id); // Mengambil data pengunjung berdasarkan ID

    //     if (!$user) {
    //         return redirect('/users')->with('error', 'Pengunjung tidak ditemukan.'); // Redirect jika ID tidak ditemukan
    //     }

    //     return view('profile.edit', ['user' => $user]);
    // }
    public function edit(Request $req)
    {
        $id = $req->id;
        if ($req->password != $req->password) {
            return redirect('/profile')->with('failed','Edit kata sandi gagal');
        }
        $update = User::where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'password' => bcrypt($req->password),
        ]);
        return redirect('/profile')->with('succes', 'Ubah kata sandi berhasil');
    }

    // Metode untuk menyimpan perubahan data pengunjung yang diedit
    public function update(Request $request, $id)
    {
        $user = User::find($id); // Mengambil data pengunjung berdasarkan ID

        if (!$user) {
            return redirect('/users')->with('error', 'Pengunjung tidak ditemukan.'); // Redirect jika ID tidak ditemukan
        }

        // Validasi dan proses update data pengunjung
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];

        $user->save(); // Menyimpan perubahan data

        return redirect('/users')->with('success', 'Data pengujung berhasil diperbarui.'); // Redirect ke halaman daftar pengujung dengan pesan sukses
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('profile.show', compact('user'));
    }
}
