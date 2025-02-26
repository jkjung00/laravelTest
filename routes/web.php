<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/user/{name?}', function ($name = null) {
  //   return view('user', compact('name'));
  return view('user', ['name' => $name]);
});

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');
