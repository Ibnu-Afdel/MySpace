<?php

use App\Http\Controllers\TodoController;
use App\Models\todo;
use Illuminate\Support\Facades\Route;

Route::view('/about' , 'about');
Route::view('/contact', 'contact');

Route::controller(TodoController::class)->group(function(){
    Route::get('/' , 'index')->name('todo.index');
    Route::get('/create' , 'create')->name('todo.create');
    Route::post('/' , 'store')->name('todo.store');
    Route::get('/{todo}' , 'show')->name('todo.show');
    Route::get('/{todo}/edit' , 'edit')->name('todo.edit');
    Route::patch('/{todo}' , 'update')->name('todo.update');
    Route::delete('/{todo}' , 'destroy')->name('todo.destroy');
}) ;




