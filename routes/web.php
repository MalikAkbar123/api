<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustoController::class, 'index']);
Route::get('/customers/create', [CustoController::class, 'create']);
Route::post('/customers/store', [CustoController::class, 'store']);
Route::get('/customers/{id}', [CustoController::class, 'show']);
Route::get('/customers/edit/{id}', [CustoController::class, 'edit']);
Route::patch('/customers/update{id}', [CustoController::class, 'update']);
Route::delete('/customers/delete{id}', [CustoController::class, 'delete']);
