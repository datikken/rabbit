<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

//
//Route::get('/', function () {
//    $employees = DB::select("select * from departments");
//    return view('welcome', ['employees' => $employees]);
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
