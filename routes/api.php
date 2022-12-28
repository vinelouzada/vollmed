<?php

use App\Http\Controllers\Api\Medicos\MedicosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/medicos",[MedicosController::class,"buscarTodos"]);
Route::get("/medicos/{medico}",[MedicosController::class,"buscarApenas"]);
Route::post("/medicos",[MedicosController::class,"cadastrar"]);
Route::put("/medicos/{medico}",[MedicosController::class,"atualizar"]);
Route::delete("/medicos/{medico}",[MedicosController::class,'excluir']);
