<?php

namespace App\Http\Controllers;

use App\Models\suplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suplier = Suplier::all();
        return view('admin.suplier.index', compact('suplier'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.suplier.create');

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
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $suplier = new Suplier;
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();
        Alert::success('Sukses Menambah Data Supplier', 'Sukses');
        return redirect()->route('suplier.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $suplier = Suplier::findOrFail($id);
        return view('admin.suplier.show', compact('suplier'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $suplier = suplier::findOrFail($id);
        return view('admin.suplier.edit', compact('suplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nama' => 'required', $id,
            'alamat' => 'required', $id,
        ]);

        $suplier = Suplier::findOrFail($id);
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();
        Alert::success('Sukses Mengubah data', 'Sukses');
        return redirect()->route('suplier.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (!Suplier::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Mantap', 'Data berhasil dihapus');
        return redirect()->route('suplier.index');

    }
}
