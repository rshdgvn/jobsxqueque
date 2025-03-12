<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $contacts = Contact::all();
    return view('index', compact('contacts'));
});


Route::get('/contact', [ContactController::class, 'index'])->name('index');
Route::get('/contact/create', [ContactController::class, 'create'])->name('create');
Route::post('/contact', [ContactController::class, 'store'])->name('store');