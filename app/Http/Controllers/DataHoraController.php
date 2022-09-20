<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHoraController extends Controller
{
    public function dataHora(Request $request) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

        $data_hora = Date('d/m/Y H:i:s');

        return response()->json([
            'data_hora' => $data_hora
        ]);
    }
}
