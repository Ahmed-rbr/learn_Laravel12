<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Pest\Plugins\Only;

Route::view('/','home');
Route::view('/contact','contact');
Route::resource('jobs', JobController::class,[])->only(['index','show']);
Route::resource('jobs', JobController::class,[])->except(['index','show'])->middleware('auth');
// Route::get('/jobs/{job}/edit',[JobController::class,'edit'])->middleware('auth')->can('edit','job')
Route::get('/register',[ RegisterController::class,'create']);
Route::post('/register',[ RegisterController::class,'store']);
Route::get('/login',[ SessionController::class,'create'])->name('login');
Route::post('/login',[ SessionController::class,'store']);
Route::post('/logout',[ SessionController::class,'destroy']);

//those go inside the arr 
// 'except'=>['edit'],
// 'only'=>['']

// Route::controller(JobController::class)->group(function(){

//     Route::get('/jobs','index');
// Route::get('/jobs/{job}','show');
// Route::get('/jobs/create','create');
// Route::post('/jobs','store');
// Route::get('/jobs/{job}/edit','edit');
// Route::patch('/jobs/{job}','update');
// Route::delete('/jobs/{job}','destroy');
// });

  











