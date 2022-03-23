<?php

namespace App\Http\Controllers;

use App\Models\barang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $barang = Barang::all();
        return view('layouts.frontend', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::findOrFaill($id);
        return view('layouts.frontend', compact('barang'));
    }
}
