<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()
    {

        return view('admin.pages.data-ulasan');
    }
}
