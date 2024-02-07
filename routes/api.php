<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['api_token'])->group(function () {
    Route::get('/appointment/{date}/{token}', [ApiController::class, 'getAppointmentByToken'])->name('appointment.token');
});
