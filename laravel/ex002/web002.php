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
});

Route::name('admin.')->group(function() {
    Route::get('admin/dashboard', function() {
        return "dashboard";
    })->name('dashboard');

    Route::get('admin/users', function() {
        return "Users";
    })->name('users');

    Route::get('admin/clientes', function() {
        return "Clientes";
    })->name('clientes');
});

Route::get('test', function() {
    return redirect()->route('admin.users');
});