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
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/category', function () {
    return view('category');
})->name('category');
Route::get('/supplier', function () {
    return view('supplier');
})->name('supplier');
Route::get('/medicine', function () {
    return view('medicine');
})->name('medicine');
Route::get('/sale', function () {
    return view('sale');
})->name('sale');
Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/report', function () {
    return view('report');
})->name('report');
Route::get('/cashiers', function () {
    return view('cashiers');
})->name('cashiers');
Route::get('/addCashier', function () {
    return view('addCashier');
})->name('addCashier');
Route::get('/addCategory', function () {
    return view('addCategory');
})->name('addCategory');
Route::get('/addSupplier', function () {
    return view('addSupplier');
})->name('addSupplier');
Route::get('/addmedicine', function () {
    return view('addmedicine');
})->name('addmedicine');

