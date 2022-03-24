<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Suplier;

class ApiController extends Controller
{
    public function suplier()
    {
        $suplier = Suplier::all();
        // return view('admin.supplier.index', compact('supplier'));

        //Ubah Json
        return response()->json([
            'success' => true,
            'message' => 'List Data Supplier',
            'data' => $suplier,
        ], 200);

    }

}
