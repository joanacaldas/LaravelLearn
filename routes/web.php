<?php

use App\Http\Controllers\EditoraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // rota para os utilizadores

    Route::get('users_index',[UserController::class, 'index'])->name('user.index');

    //rota para os botões editar, atualizar e apagar
    Route::get('users_edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('users_update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('users_delete/{id}', [UserController::class, 'delete'])->name('user.delete');


    //rota para os sócios e para a editora
    Route::resources([
        //Prefixo para aceder às rotas
        'socio'=>SocioController::class,
        'editora'=>EditoraController::class
    ]);

    //rota para os sócios de um utilizador
    // Route::get('socios_user/{id}',[SocioController::class,'socios_user'])->name('socio.user');
    Route::put('socios_update/{id}', [SocioController::class,'update'])->name('socio.update');
    Route::get('socios_delete/{id}', [SocioController::class, 'delete'])->name('socio.delete');

    
    
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');