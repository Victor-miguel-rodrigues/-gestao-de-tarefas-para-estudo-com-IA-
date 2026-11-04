<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/register', [Register::class, 'create'])->name('register.auth');
Route::post('/registration', [UsuariosController::class, 'create'])->name('registration.auth');


Route::middleware('auth')->get('/index', function(){

});