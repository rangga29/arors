<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/administrator'], function() {
    Route::group(['middleware' => 'guest'], function() {
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/login', [UserController::class, 'authentication'])->name('authentication');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::get('', [RouteController::class, 'index'])->name('root');

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
//        Route::get('/dashboard', fn()=>view('backend.dashboard'))->name('dashboard');
//        Route::get('/clinics', [ClinicController::class, 'index'])->name('clinics');
//        Route::get('/schedules/dates', [ScheduleDateController::class, 'index'])->name('schedules.dates');
//        Route::get('/schedules/dates/download/{scheduleDate}', [ScheduleDateController::class, 'downloadSchedule'])->name('schedules.dates.download');

        Route::get('{first}/{second}/{third}', [RouteController::class, 'thirdLevel'])->name('third');
        Route::get('{first}/{second}', [RouteController::class, 'secondLevel'])->name('second');
        Route::get('{any}', [RouteController::class, 'root'])->name('any');
    });
});
