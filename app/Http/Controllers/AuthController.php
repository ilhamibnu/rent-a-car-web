<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
