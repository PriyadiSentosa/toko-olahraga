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
