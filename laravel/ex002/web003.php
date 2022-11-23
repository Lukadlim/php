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

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function() {

    Route::get('/dashboard', function() {
        return "dashboard";
    })->name('dashboard');

    Route::get('users', function() {
        return "Users";
    })->name('users');

    Route::get('clientes', function() {
        return "Clientes";
    })->name('clientes');
    
});

Route::get('test', function() {
    return redirect()->route('admin.users');
});