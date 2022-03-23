<?php

namespace App\Http\Controllers;

use App\Models\suplier;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function index()
    {
        //Menampilkan Data Tabel Supplier
        $suplier = suplier::all();

        // Ubah ke Json
        return response()->json([
            'success' => true,
            'message' => 'List Data Supplier',
            'data' => $suplier,
        ], 200);

    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $suplier = new suplier;
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();
        return response()->json([
            'success' => true,
            'message' => 'List Tambah Suplier',
            'data' => $suplier,
        ], 200);

    }

    public function show($id)
    {
        //Menampilkan Data Tabel Supplier
        $suplier = suplier::find($id);

        // Ubah ke Json
        return response()->json([
            'success' => true,
            'message' => 'List Data Supplier',
            'data' => $suplier,
        ], 200);

    }

    public function update(Request $request, $id)
    {
        //

        $suplier = Suplier::findOrFail($id);
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();

        return response()->json([
            'success' => true,
            'message' => 'List Tambah Suplier',
            'data' => $suplier,
        ], 200);

    }

}
