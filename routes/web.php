<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;
use App\Http\Livewire\LivewireComponent;

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


//create
Route::get('/create', [TodolistController::class, 'get']);
Route::post('/store', [TodolistController::class, 'store']);


//get id
Route::get('/user/{id}', [TodolistController::class, 'show']);

//update
Route::put('/update/{todolist}', [TodolistController::class, 'update']);

//delete
Route::delete('/delete/{drop}', [TodolistController::class, 'drop']);



//livewire 3
