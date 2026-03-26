<?php

use App\Models\Product;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('success', 'User created successfully!');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return view('index');
});


Route::get('/catalog', function () {
    $products = Product::all();
    return view('layouts.catalog', compact('products'));
})->name('layouts.catalog');

Route::get('/avto', function () {
    $products = Product::all();
    return view('layouts.avto', compact('products'));
})->name('avto.page');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
