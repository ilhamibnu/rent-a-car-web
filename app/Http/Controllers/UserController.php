<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'user')->orderbydesc('id')->get();
        return view('admin.pages.data-user', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'repassword' => 'required|same:password',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'repassword.required' => 'Konfirmasi password harus diisi',

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user',
        ]);

        return redirect()->back()->with('store', 'Data user berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        if ($request->password != null) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'required',
                'repassword' => 'required|same:password',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Konfirmasi password harus diisi',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Konfirmasi password harus diisi',
            ]);
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->back()->with('update', 'Data user berhasil diubah');
    }

    public function destroy($id)
    {
        $transaksi = User::find($id);
        if ($transaksi->transaksi->count() > 0) {
            return redirect()->back()->with('destroy', 'Data user tidak bisa dihapus karena memiliki transaksi');
        } else {
            $user = User::find($id);
            $user->delete();
        }

        return redirect()->back()->with('destroy', 'Data user berhasil dihapus');
    }

    public function userterhapus()
    {
        $user = User::onlyTrashed()->where('role', 'user')->get();
        return view('admin.pages.data-user-terhapus', [
            'user' => $user
        ]);
    }

    public function restore($id)
    {
        $user = User::withTrashed()->find($id);
        $user->restore();

        return redirect()->back()->with('restore', 'Data user berhasil direstore');
    }

    public function forceDelete($id)
    {
        $user = User::withTrashed()->find($id);
        $user->forceDelete();

        return redirect()->back()->with('destroy', 'Data user berhasil dihapus permanen');
    }
}
