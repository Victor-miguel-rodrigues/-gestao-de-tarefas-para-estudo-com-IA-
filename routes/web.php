<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('index')->middleware('noauth');


Route::get('/register', [Register::class, 'create'])->name('register.auth');
Route::post('/registration', [UsuariosController::class, 'create'])->name('registration.auth');
Route::get('/login', [UsuariosController::class, 'show'])->name('login.auth');
Route::post('/login', [UsuariosController::class, 'store'])->name('login');


Route::middleware('auth')->group(function () {
     Route::get('/home', [UsuariosController::class, 'index'])->name('home')->middleware('auth');
     Route::post('/logout', [UsuariosController::class, 'edit'])->name('logout.auth')->middleware('auth');
     Route::get('/perfil',[UsuariosController::class])->name('perfil')->middleware('auth');
     Route::get('perfil/view/{id}', [Register::class, 'show'])->name('view.id')->middleware('auth');
});