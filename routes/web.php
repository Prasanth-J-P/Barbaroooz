<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {return view('welcome');})->name('homepage');
Route::get('/books/create', [PostController::class, 'create'])->name('appointments.create');
Route::post('/books/check', [PostController::class, 'check'])->name('appointments.check'); 
Route::post('/books', [PostController::class, 'store'])->name('appointments.store');
Route::get('/books/listappointments',  [PostController::class, 'search'])->name('searchappointments');
Route::post('/books/listappointments/list', [PostController::class, 'index'])->name('getappointments.index');
Route::delete('/books/deleteappointments/{id}', [PostController::class, 'delete'])->name('appointments.delete');
Route::get('/books/{id}/editappointments', [PostController::class, 'edit'])->name('appointments.edit');
Route::post('/books/checkupdate', [PostController::class, 'checkupdate'])->name('appointments.checkupdate'); 
Route::put('/books/editappointments/{id}', [PostController::class, 'update'])->name('appointments.update');

