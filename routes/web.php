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
    return view('welcome');
})->name('home');

Route::get('/restaurantes', function () {
    return view('restaurantes');
})->name('restaurant');

Route::get('/meal', function () {
    return view('meal');
})->name('menu');

Route::get('/book-table', function () {
    return view('book-table');
})->name('book-table');

Route::get('/log-in', function () {
    return view('log-in');
})->name('sign-up');

Route::get('/restaurant/1', function () {
    return view('restau1');
})->name('restaurant.one');

Route::get('/restaurant/2', function () {
    return view('restau2');
})->name('restaurant.two');
Route::get('/restaurant/3', function () {
    return view('restaurent3');
})->name('restaurant.three');

// Route for the "Sale 50%" link. Since it's an anchor link (#about),
// it likely points to a section on the homepage. We don't need a
// separate route for this unless you intend to load a different page.
// If it's on the homepage, the '/#about' will be handled by the browser.

// If you later decide that "Sale 50%" should load a different page,
// you can add a route like this:
// Route::get('/sale', function () {
//     return view('sale');
// })->name('sale');