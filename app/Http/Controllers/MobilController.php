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
            'jenis_kendaraan' => 'required|string',
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|file|max:2000'
        ], [
            'nama.required' => 'Nama Mobil Harus Diisi',
            'harga.required' => 'Harga Mobil Harus Diisi',
            'deskripsi.required' => 'Deskripsi Mobil Harus Diisi',
            'foto.required' => 'Foto Mobil Harus Diisi',
            'foto.image' => 'Foto Mobil Harus Berupa Gambar',
            'foto.file' => 'Foto Mobil Harus Berupa File',
            'foto.max' => 'Foto Mobil Maksimal 2MB'

        ]);

        if ($request->file('foto')) {
            $fileFoto = $request->file('foto');
            $fileName = time() . '_' . $fileFoto->getClientOriginalName();
            $fileFoto->move(public_path('img/mobil'), $fileName);

            $dataMobil = new Mobil();
            $dataMobil->jenis_kendaraan = $request->input('jenis_kendaraan'); // Perhatikan perubahan ini
            $dataMobil->nama = $request->input('nama');
            $dataMobil->harga = $request->input('harga');
            $dataMobil->deskripsi = $request->input('deskripsi');
            $dataMobil->foto = 'img/mobil/' . $fileName;
            $dataMobil->save();
        }

        return redirect()->back()->with('store', 'Berhasil Menambahkan Data Mobil');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'foto' => 'image|file|max:2000'
        ]);

        $dataMobil = Mobil::findOrFail($id);
        if ($request->file('foto') == "") {
            $dataMobil->nama = $request->input('nama');
            $dataMobil->harga = $request->input('harga');

            $dataMobil->deskripsi = $request->input('deskripsi');
            $dataMobil->update();
        } else {
            File::delete('img/mobil/' . basename($dataMobil->foto));
            $fileFoto = $request->file('foto');
            $fileName = time() . '_' . $fileFoto->getClientOriginalName();
            $fileFoto->move(public_path('img/mobil'), $fileName);
            $dataMobil->nama = $request->input('nama');
            $dataMobil->harga = $request->input('harga');

            $dataMobil->deskripsi = $request->input('deskripsi');
            $dataMobil->foto = 'img/mobil/' . $fileName;
            $dataMobil->update();
        }

        return redirect()->back()->with('update', 'Data Berhasil Di Perbarui');
    }

    public function destroy($id)
    {
        // cek mobil di transaksi
        $mobil = Mobil::find($id);
        if ($mobil->transaksi->count() > 0) {
            return redirect()->back()->with('punyadata', 'Data Mobil Tidak Bisa Dihapus Karena Memiliki Transaksi');
        }

        $dataMobil = Mobil::findOrFail($id);
        $dataMobil->delete();
        return redirect()->back()->with('destroy', 'Berhasil Menghapus Data');
    }

    public function mobilterhapus()
    {
        $dataMobils = Mobil::onlyTrashed()->get();
        return view('admin.pages.data-mobil-terhapus', compact('dataMobils'));
    }

    public function restore($id)
    {
        $dataMobil = Mobil::withTrashed()->findOrFail($id);
        $dataMobil->restore();
        return redirect()->back()->with('restore', 'Berhasil Mengembalikan Data');
    }

    public function forceDelete($id)
    {
        $dataMobil = Mobil::withTrashed()->findOrFail($id);
        File::delete('img/mobil/' . basename($dataMobil->foto));
        $dataMobil->forceDelete();
        return redirect()->back()->with('destroy', 'Berhasil Menghapus Permanen Data');
    }
}
