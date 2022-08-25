<?php

use App\Http\Livewire\Category\IndexCategory;
use App\Http\Livewire\Category\StoreCategory;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Ingredients\IndexIngredients;
use App\Http\Livewire\Ingredients\StoreIngredients;
use App\Http\Livewire\MainCategory\IndexMainCategory;
use App\Http\Livewire\MainCategory\StoreMainCategory;
use App\Http\Livewire\ManageIngredients\IndexManageIngredients;
use App\Http\Livewire\SubCategory\IndexSubCategory;
use App\Http\Livewire\SubCategory\StoreSubCategory;
use App\Http\Livewire\TableList\IndexTable;
use App\Http\Livewire\Traditional\IndexTraditional;
use App\Http\Livewire\Traditional\StoreTraditional;
use App\Http\Livewire\User\IndexUser;
use App\Http\Livewire\User\StoreUser;
use App\Http\Livewire\WaiterTableList\IndexWaiterTableList;
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
    Route::get('/index-category', IndexCategory::class)->name('index_category');
    Route::get('/store-category', StoreCategory::class)->name('store_category');
    Route::get('/main-category', IndexMainCategory::class)->name('index_main_category');
    Route::get('/store-main-category', StoreMainCategory::class)->name('store_main_category');
    Route::get('/sub-category', IndexSubCategory::class)->name('index_sub_category');
    Route::get('/store-sub-category', StoreSubCategory::class)->name('store_sub_category');
    Route::get('/index-traditional', IndexTraditional::class)->name('index_traditional');
    Route::get('/store-traditional', StoreTraditional::class)->name('store_traditional');
    Route::get('/index-manage-ingredients/{id}', array('as' => 'index_manage_ingredients', 'uses' => IndexManageIngredients::class));
    Route::get('/index-table-list', IndexTable::class)->name('index_table_list');
    Route::get('/index-waiter-table-list', IndexWaiterTableList::class)->name('index_waiter_table_list');
});

require __DIR__ . '/auth.php';
