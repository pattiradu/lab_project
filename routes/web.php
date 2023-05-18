<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ActivitiesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/lab/lab_one',[LabController::class, 'lab1'])->name('lab1');



Route::post('/lab/lab1', [ActivitiesController::class, 'store'])->name('ActivitiesController.store');

Route::get('/lab/kkklab1', [ActivitiesController::class, 'index'])->name('ActivitiesController.index');


// resourtcefull routes
Route::resource('/computer', ComputerController::class);