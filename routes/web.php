<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('products.index');
})->name('products.index');


Route::get('/comic', function(){
    $comics = config('comics');
    $comic = $comics[0];
    return view('products.show', compact('comic'));
    
})->name('products.show');