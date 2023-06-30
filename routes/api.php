<?php

use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;


/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('v1')->group(function (){
    Route::get('/users', [UserController::class, 'index']); //Criação de rota principal para a api, onde irá aparecer os dados de todos os usuários.
    Route::get('/users/{user}', [UserController::class, 'show']); //Criação de rota na qual irá aparecer os dados dos usuários pelo id.
    Route::get('/invoices', [InvoiceController::class, 'index']); //Criação de rota principal para as invoices, no qual irá mostrar a lista de todos os pedidos.
    Route::get('/invoices/{invoice}', [InvoiceController::class, 'show']); //Criação de rota para trazer as invoices para cada usuário.
    Route::post('/invoices', [InvoiceController::class, 'store']); 
});

