<?php

use App\Http\Controllers\Painel\{
  HomeController,
  ServiceController,
  UserController
};

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

  #Home
  Route::get('/home', [HomeController::class, 'index'])->name('home');
  #Home

  #Service
  Route::get('service/excluir/{id}', [ServiceController::class, 'excluir'])->name('service.excluir');
  Route::resource('service', ServiceController::class);
  #Service

  #User
  Route::get('user/excluir/{id}', [UserController::class, 'excluir'])->name('user.excluir');
  Route::resource('user', UserController::class);
  #User

});
