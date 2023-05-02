<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('adminLogin');
});
Route::get('/adminLogin', function () {
    return view('adminLogin');
})->name('adminLogin');
Route::get('/adminReg', function () {
    return view('adminReg');
})->name('adminReg');
Route::get('/cashierLogin', function () {
    return view('cashierLogin');
})->name('cashierLogin');
Route::get('/cashierReg', function () {
    return view('cashierReg');
})->name('cashierReg');
Route::get('/cashier', function () {
    return view('cashier');
})->name('cashier');
Route::get('/daily', function () {
    return view('daily');
})->name('daily');
Route::get('/sales', function () {
    return view('sales');
})->name('sales');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
