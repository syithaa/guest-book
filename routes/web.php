<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group(['middleware' => ['auth'],
 'prefix' => 'admin',
 'as' => 'admin.',
], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::resource('/institution', App\Http\Controllers\InstitutionController::class);

    Route::resource('/guests', App\Http\Controllers\GuestController::class)->only(['index','show','destroy']);

});