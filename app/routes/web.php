<?php

use App\Http\Controllers\Filier\FilierContrller;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\GroupCollection;

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

Route::get('/', [FilierContrller::class, 'index'])->name('filier.index');

Route::resource('filier', FilierContrller::class);
Route::resource('groupe', GroupCollection::class);