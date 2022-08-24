<?php

use App\Http\Livewire\Dashboard;
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
});

require __DIR__ . '/auth.php';
