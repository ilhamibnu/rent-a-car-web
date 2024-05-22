<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function profil()
    {
        return view('admin.auth.profil');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard')->with('login', 'Login berhasil');
        } else {
            return redirect()->back()->with('logingagal', 'Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('logout', 'Logout berhasil');
    }

    public function updateprofil(Request $request)
    {
        if ($request->password != null) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . Auth::user()->id,
                'password' => 'required',
                'repassword' => 'required|same:password',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Konfirmasi password harus diisi',

            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
            ]);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->back()->with('updateprofil', 'Profil berhasil diupdate');
    }
}
