<?php

use App\Http\Controllers\BusinessPartnerController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleBackupController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScheduleDateController;
use App\Http\Controllers\UserController;
use App\Livewire\CheckPatient;
use App\Livewire\UmumForm;
use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.home')->name('home');
Route::get('/umum', CheckPatient::class)->name('umum');

Route::prefix('administrator')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/login', [UserController::class, 'authentication'])->name('authentication');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [RouteController::class, 'index'])->name('root');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('schedules')->group(function () {
            Route::prefix('history')->group(function () {
                Route::prefix('dates')->group(function () {
                    Route::get('/', [ScheduleBackupController::class, 'index'])->name('schedules.backup.dates');
                    Route::post('/show', [ScheduleBackupController::class, 'showRedirect'])->name('schedules.backup.dates.show.redirect');
                });
                Route::get('/{date}', [ScheduleBackupController::class, 'view'])->name('schedules.backup');
            });
            Route::prefix('dates')->group(function () {
                Route::get('/', [ScheduleDateController::class, 'index'])->name('schedules.dates');
                Route::post('/', [ScheduleDateController::class, 'store'])->name('schedules.dates.store');
                Route::post('/show', [ScheduleDateController::class, 'showRedirect'])->name('schedules.dates.show.redirect');
                Route::get('/{scheduleDate}/download', [ScheduleDateController::class, 'download'])->name('schedules.dates.download');
                Route::get('/{scheduleDate}/downloadUpdate', [ScheduleDateController::class, 'downloadUpdate'])->name('schedules.dates.downloadUpdate');
                Route::get('/{scheduleDate}', [ScheduleDateController::class, 'show'])->name('schedules.dates.show');
                Route::put('/{scheduleDate}', [ScheduleDateController::class, 'update'])->name('schedules.dates.update');
                Route::delete('/{scheduleDate}', [ScheduleDateController::class, 'destroy'])->name('schedules.dates.destroy');
            });
            Route::get('/{date}', [ScheduleController::class, 'index'])->name('schedules');
            Route::post('/{date}/available/{schedule}', [ScheduleController::class, 'available'])->name('schedule.available');
        });

        Route::prefix('clinics')->group(function () {
            Route::get('/', [ClinicController::class, 'index'])->name('clinics');
            Route::post('/store', [ClinicController::class, 'store'])->name('clinics.store');
            Route::get('/lastOrder', [ClinicController::class, 'getLastOrder'])->name('clinics.get-last-order');
            Route::get('/{clinic}', [ClinicController::class, 'show'])->name('clinics.show');
            Route::put('/{clinic}', [ClinicController::class, 'update'])->name('clinics.update');
            Route::delete('/{clinic}', [ClinicController::class, 'destroy'])->name('clinics.destroy');
        });

        Route::prefix('businessPartners')->group(function () {
            Route::get('/', [BusinessPartnerController::class, 'index'])->name('businessPartners');
            Route::post('/store', [BusinessPartnerController::class, 'store'])->name('businessPartners.store');
            Route::get('/lastOrder', [BusinessPartnerController::class, 'getLastOrder'])->name('businessPartners.get-last-order');
            Route::get('/{businessPartner}', [BusinessPartnerController::class, 'show'])->name('businessPartners.show');
            Route::put('/{businessPartner}', [BusinessPartnerController::class, 'update'])->name('businessPartners.update');
            Route::delete('/{businessPartner}', [BusinessPartnerController::class, 'destroy'])->name('businessPartners.destroy');
        });

        Route::prefix('users')->group(function () {
            Route::prefix('profile')->group(function () {
                Route::get('/{user}', [ProfileController::class, 'index'])->name('users.profile');
                Route::put('/{user}', [ProfileController::class, 'update'])->name('users.profile.update');
            });
            Route::get('/', [UserController::class, 'index'])->name('users');
            Route::post('/', [UserController::class, 'store'])->name('users.store');
            Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
            Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
            Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
            Route::get('/{user}/getRole', [UserController::class, 'getRoleByUser'])->name('users.get-role');
        });

        Route::prefix('logs')->group(function () {
            Route::get('/', [LogController::class, 'index'])->name('logs');
            Route::get('/{user}', [LogController::class, 'getByUser'])->name('logs.user');
        });

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        Route::get('{first}/{second}/{third}', [RouteController::class, 'thirdLevel'])->name('third');
        Route::get('{first}/{second}', [RouteController::class, 'secondLevel'])->name('second');
        Route::get('{any}', [RouteController::class, 'root'])->name('any');
    });
});
