<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('landing.auth.login');
    }

    public function profil()
    {
        return view('landing.pages.profil');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/')->with('login', 'Login berhasil');
        } else {
            return back()->with('gagallogin', 'Login gagal');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'repassword' => 'required|same:password'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Konfirmasi password tidak boleh kosong',
            'repassword.same' => 'Konfirmasi password tidak sama'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/user/login')->with('register', 'Register berhasil');
    }

    public function updateprofil(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'password' => 'nullable',
            'repassword' => 'nullable|same:password'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Konfirmasi password tidak boleh kosong',
            'repassword.same' => 'Konfirmasi password tidak sama'
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return back()->with('updateprofil', 'Profil berhasil diupdate');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('logout', 'Logout berhasil');
    }
}
