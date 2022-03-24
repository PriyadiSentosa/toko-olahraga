<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\Suplier;
use App\Models\User;

class ApiController extends Controller
{
    public function suplier()
    {
        $suplier = Suplier::all();

        //Ubah Json
        return response()->json([
            'success' => true,
            'message' => 'List Data Supplier',
            'data' => $suplier,
        ], 200);

    }

    public function barang()
    {
        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->suplier_id = $request->suplier_id;
        $barang->cover = $name;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return response()->json([
            'success' => true,
            'message' => 'data barang',
            'data' => $barang,
        ], 200);
    }

    public function user()
    {
        $user = User::all();

        //Ubah Json
        return response()->json([
            'success' => true,
            'message' => 'List Data User',
            'data' => $user,
        ], 200);

    }

}
