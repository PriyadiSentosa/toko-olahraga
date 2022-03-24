<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\barang;
use App\Models\Suplier;
use App\Models\User;
use DB;

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
        $barang = Barang::with('suplier')->get();
        $barang = DB::table('barangs')
            ->join('barangs', 'barangs.suplier_id', '=', 'barangs.id', )
            ->select('barangs.nama_barang', 'barangs.harga', 'barangs.stok', 'barangs.cover', 'barangs.nama as suplier')
            ->get();
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
