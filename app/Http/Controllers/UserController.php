<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $user = User::where('role', 'user')->get();
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
=======
        $dataUsers = User::all();
        return view('admin.pages.data-user', compact('dataUsers') );
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'nullable|string|max:255',
            'email_verified_at' => 'nullable|date',
            'remember_token' => 'nullable|string|max:100',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), 
            'role' => $validatedData['role'],
            'email_verified_at' => $validatedData['email_verified_at'],
            'remember_token' => $validatedData['remember_token'],
        ]);

        return redirect()->back()->with('success', 'User added successfully');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8', 
        ]);
    
        $user = User::findOrFail($id);
    
  
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
    

        if(isset($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
    

        $user->save();
    
        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    
}
