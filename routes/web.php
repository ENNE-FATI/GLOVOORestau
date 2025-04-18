<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;


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
Route::get('/synapse', [AuthController::class, 'showSynapseForm'])->name('synapse.form');
Route::post('/synapse', [AuthController::class, 'handleSynapseForm'])->name('synapse.submit');
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');

// Route POST pour traiter la soumission du formulaire de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route GET pour afficher la page du tableau de bord après la connexion
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route POST pour se déconnecter
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/restaurant/1', function () {
    return view('restau1');
})->name('restaurant.one');

Route::get('/restaurant/2', function () {
    return view('restau2');
})->name('restaurant.two');
Route::get('/restaurant/3', function () {
    return view('restaurent3');
})->name('restaurant.three');












Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'register'])->name('signup');

Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin.form');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');






Route::middleware('auth')->group(function () {
    Route::get('/order', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order/track/{order}', [OrderController::class, 'track'])->name('order.track');
});


// Route for the "Sale 50%" link. Since it's an anchor link (#about),
// it likely points to a section on the homepage. We don't need a
// separate route for this unless you intend to load a different page.
// If it's on the homepage, the '/#about' will be handled by the browser.

// If you later decide that "Sale 50%" should load a different page,
// you can add a route like this:
// Route::get('/sale', function () {
//     return view('sale');
// })->name('sale');