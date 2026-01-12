<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneBookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/phonebook', [PhoneBookController::class, 'index'])->name('phonebook.index');
Route::get('/phonebook/create', [PhoneBookController::class, 'create']);
Route::post('/phonebook', [PhoneBookController::class, 'store']);   


Route::get('/phone-book/{id}', [PhoneBookController::class, 'show'])->name('phone-book.show');



Route::get('/phone-book/{id}/edit', [PhoneBookController::class, 'edit'])->name('phone-book/edit');

Route::put('/phone-book/{id}',[PhoneBookController::class, 'update'])->name('phone-book.update');


//Route::get('{id}', [PhoneBookController::class, 'edit']);


Route::DELETE('/phone-bookd/{id}',[PhoneBookController::class, 'destroy'])->name('phone-bookd.destroy');