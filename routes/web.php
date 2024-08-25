<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::controller(ClientController::class)->group(function () {
    // Route::get('/category/{id}', 'Category')->name('category');
    // Route::get('/tag/{id}', 'Tag')->name('tag');
    // Route::get('/recommended', 'Recommended')->name('recommended');
    // Route::get('/news', 'AllNews')->name('allnews'); 
    // Route::get('/news/{slug}', 'News')->name('news');
    // Route::get('/newsletter', 'Newsletter')->name('newsletter');
    Route::get('/clients/list', 'index')->name('clients');
    Route::get('/clients/ajax_client', 'ajax_client')->name('ajax_client');
    Route::get('/clients/create', 'create')->name('create.client');
    Route::post('/clients/store', 'store')->name('store.client');
});