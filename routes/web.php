<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Ingredients\IndexIngredients;
use App\Http\Livewire\Ingredients\StoreIngredients;
use App\Http\Livewire\User\IndexUser;
use App\Http\Livewire\User\StoreUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/indexuser', IndexUser::class)->name('indexuser');
    Route::get('/storeuser', StoreUser::class)->name('store_user');
    Route::get('/index-ingredients', IndexIngredients::class)->name('index_ingredients');
    Route::get('/store-ingredients', StoreIngredients::class)->name('store_ingredients');
});

require __DIR__ . '/auth.php';
