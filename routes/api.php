<?php

use App\Http\Controllers\API\EmpresaController as EmpresaAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/empresas', [EmpresaAPI::class, 'index'])->name('empresas');
Route::post('/empresas', [EmpresaAPI::class, 'create'])->name('empresas.create');
Route::put('/empresas/{empresa}', [EmpresaAPI::class, 'update'])->name('empresas.update');
Route::delete('/empresas/{empresa}', [EmpresaAPI::class, 'destroy'])->name('empresas.destroy');
