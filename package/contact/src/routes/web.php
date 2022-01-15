<?php

use Illuminate\Support\Facades\Route;
use Skillshare\Contact\Http\Controllers\ContactsController;


Route::get('/contact', [ContactsController::class, 'index'])->name('contact');
Route::post('/contact', [ContactsController::class, 'sendMessage']);


