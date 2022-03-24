<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Suplier;

class ApiController extends Controller
{
    public function supplier()
    {
        $supplier = Supplier::all();
        // return view('admin.supplier.index', compact('supplier'));

        //Ubah Json
        return response()->json([
            'success' => true,
            'message' => 'List Data Supplier',
            'data' => $supplier,
        ], 200);

    }

}
