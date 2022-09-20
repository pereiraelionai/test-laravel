<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;
use App\Http\Controllers\DataHoraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', [ DataHoraController::class, 'dataHora' ] );

Route::post('/texto', 'TextoController@enviarTexto');

Route::get('/hello', [ HelloController::class, 'hello' ]);

// TODO: criar uma rota que retorne a data-hora atual (sugestão: use a função `now()`)
// TODO: criar uma rota POST que chame uma função em um controller e retorne o texto recebido na requisição