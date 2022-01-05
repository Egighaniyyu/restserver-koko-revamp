<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tanamanHias;

class TanamanHiasController extends Controller
{
    public function index()
    {
        return tanamanHias::all();
    }

    public function create(Request $request)
    {
        $tanaman = new tanamanHias;
        $tanaman->img = $request->img;
        $tanaman->nama_tanaman = $request->nama_tanaman;
        $tanaman->deskripsi = $request->deskripsi;
        $tanaman->stok = $request->stok;
        $tanaman->harga = $request->harga;
        $tanaman->save();

        return "Data Berhasil masuk";
    }

    public function update(Request $request, $id)
    {
        $img = $request->img;
        $nama_tanaman = $request->nama_tanaman;
        $deskripsi = $request->deskripsi;
        $stok = $request->stok;
        $harga = $request->harga;

        $tanaman = tanamanHias::find($id);
        $tanaman->img = $img;
        $tanaman->nama_tanaman = $nama_tanaman;
        $tanaman->deskripsi = $deskripsi;
        $tanaman->stok = $stok;
        $tanaman->harga = $harga;
        $tanaman->save();

        return "Data Berhasil di update";
    }

    public function delete($id)
    {
        $tanaman = tanamanHias::find($id);
        $tanaman->delete();

        return "Data berhasil dihapus";
    }
}
