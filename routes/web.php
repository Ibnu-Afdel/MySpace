<?php

use App\Http\Controllers\TodoController;
use App\Models\todo;
use Illuminate\Support\Facades\Route;

Route::view('/about' , 'about');
Route::view('/contact', 'contact');

Route::controller(TodoController::class)->group(function(){
    Route::get('/' , 'index')->name('index');
    Route::get('/create' , 'create')->name('create');
    Route::post('/' , 'store')->name('store');
    Route::get('/{todo}' , 'show')->name('show');
    Route::get('/{todo}/edit' , 'edit')->name('edit');
    Route::patch('/{todo}' , 'update')->name('update');
    Route::delete('/{todo}' , 'destroy')->name('destroy');
}) ;




