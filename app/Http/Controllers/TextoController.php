<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextoController extends Controller
{
    public function enviarTexto(Request $request) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        return $request;
    }
}
