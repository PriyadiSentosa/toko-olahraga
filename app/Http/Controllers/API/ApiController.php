<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        // $artikel = barang::with('suplier')->get();
        $artikel = DB::table('barangs')
            ->join('barang_suplier', 'barangs.suplier_id', '=', 'barang_suplier.id', )
        // ->join('barang_tags', 'barang_tags.id', '=', 'barangs.id', )
            ->select('barangs.nama_barang', 'barangs.harga', 'barangs.cover', 'barang_suplier.nama as suplier')
            ->get();
        return response()->json([
            'success' => true,
            'message' => 'data artikel',
            'data' => $artikel,
        ], 200);
    }

    public function user()
    {
        $user = User::all();

        //Ubah Json
        return response()->json([
            'success' => true,
            'message' => 'List Data Supplier',
            'data' => $user,
        ], 200);

    }

}
