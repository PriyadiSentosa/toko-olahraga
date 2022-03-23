<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\suplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = Barang::with('suplier')->get();
        return view('admin.barang.index', compact('barang'));

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok - $pesanan_detail->jumlah;
            $barang->update();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $suplier = Suplier::all();
        return view('admin.barang.create', compact('suplier'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_barang' => 'required|unique:barangs',
            'harga' => 'required',
            'suplier_id' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga = $request->harga;
        $barang->suplier_id = $request->suplier_id;

// upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/barang/', $name);
            $barang->cover = $name;
        }
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();
        Alert::success('Sukses Menambah Data Barang', 'Success');
        return redirect()->route('barang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barang = Barang::findOrFail($id);
        return view('admin.barang.show', compact('barang'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barang = Barang::findOrFail($id);
        $suplier = Suplier::all();
        return view('admin.barang.edit', compact('barang', 'suplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $request->validate([
        //     'nama_barang' => 'required|unique:barangs',
        //     'harga' => 'required',
        //     'suplier_id' => 'required',
        //     'stok' => 'required',
        //     'deskripsi' => 'required',
        //     'cover' => 'required|image|max:2048',
        // ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->suplier_id = $request->suplier_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $barang->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/barang/', $name);
            $barang->cover = $name;
        }
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok = $request->stok;
        $barang->save();
        return redirect()->route('barang.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barang = Barang::findOrFail($id);
        $barang->deleteImage();
        $barang->delete();
        return redirect()->route('barang.index');

    }
}
