<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $dataUsers = User::all();
        return view('admin.pages.data-user', compact('dataUsers') );
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
