<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/administrator'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/login', [UserController::class, 'authentication'])->name('authentication');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', [RouteController::class, 'index'])->name('root');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/clinics', [ClinicController::class, 'index'])->name('clinics');
        Route::post('/clinics/store', [ClinicController::class, 'store'])->name('clinic.store');
        Route::get('/clinic/{clinic}', [ClinicController::class, 'show'])->name('clinic.show');
        Route::put('/clinic/{clinic}', [ClinicController::class, 'update'])->name('clinic.update');
        Route::delete('/clinic/{clinic}', [ClinicController::class, 'destroy'])->name('clinic.destroy');

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        Route::get('{first}/{second}/{third}', [RouteController::class, 'thirdLevel'])->name('third');
        Route::get('{first}/{second}', [RouteController::class, 'secondLevel'])->name('second');
        Route::get('{any}', [RouteController::class, 'root'])->name('any');
    });
});
