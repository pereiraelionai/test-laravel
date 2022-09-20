<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHoraController extends Controller
{
    public function dataHora(Request $request) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

        $data = Date('d/m/Y');
        $hora = Date('H:i:s');

        return response()->json([
            'data' => $data,
            'hora' => $hora
        ]);
    }
}
