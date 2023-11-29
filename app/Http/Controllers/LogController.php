<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\User;

class LogController extends Controller
{
    public function index()
    {
        return view('backend.logs.view', [
            'logs' => Log::orderBy('lo_time', 'DESC')->get()
        ]);
    }

    public function getByUser(User $user)
    {
        return view('backend.logs.view', [
           'logs' => Log::where('lo_user', $user->name)->orderBy('lo_time', 'DESC')->get()
        ]);
    }
}
