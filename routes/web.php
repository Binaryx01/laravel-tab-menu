<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;



// Route to display the menu on the front page (GET)
Route::get('/', [MenusController::class, 'index'])->name('menu.index');

// Route to display the form for adding items (GET)
Route::get('/menu/create', [MenusController::class, 'create'])->name('menu.create');

// Route to handle the form submission and save items (POST)
Route::post('/menu', [MenusController::class, 'store'])->name('menu.store');
