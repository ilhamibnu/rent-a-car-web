<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index()
    {
        $dataMobils = Mobil::all();
        return view('admin.pages.data-mobil', compact('dataMobils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'status' => 'required',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|file|max:2000'
        ]);

        if ($request->file('foto')) {
            $fileFoto = $request->file('foto');
            $fileName = time() . '_' . $fileFoto->getClientOriginalName();
            $fileFoto->move(public_path('img/mobil'), $fileName);

            $dataMobil = new Mobil();
            $dataMobil->nama = $request->input('nama');
            $dataMobil->harga = $request->input('harga');
            $dataMobil->status = $request->input('status');
            $dataMobil->deskripsi = $request->input('deskripsi');
            $dataMobil->foto = 'img/mobil/' . $fileName;
            $dataMobil->save();
        }

        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Mobil');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'status' => 'required',
            'deskripsi' => 'required|string',
            'foto' => 'image|file|max:2000'
        ]);

        $dataMobil = Mobil::findOrFail($id);
        if ($request->file('foto') == "") {
            $dataMobil->nama = $request->input('nama');
            $dataMobil->harga = $request->input('harga');
            $dataMobil->status = $request->input('status');
            $dataMobil->deskripsi = $request->input('deskripsi');
            $dataMobil->update();
        } else {
            File::delete('img/mobil' . basename($dataMobil->foto));
            $fileFoto = $request->file('foto');
            $fileName = time() . '_' . $fileFoto->getClientOriginalName();
            $fileFoto->move(public_path('img/mobil'), $fileName);
            $dataMobil->nama = $request->input('nama');
            $dataMobil->harga = $request->input('harga');
            $dataMobil->status = $request->input('status');
            $dataMobil->deskripsi = $request->input('deskripsi');
            $dataMobil->foto = 'img/mobil/' . $fileName;
            $dataMobil->update();
        }

        return redirect()->back()->with('success', 'Data Berhasil Di Perbarui');
    }

    public function destroy($id)
    {
        $dataMobil = Mobil::findOrFail($id);
        File::delete('img/mobil/' . basename($dataMobil->foto));
        $dataMobil->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }
}
