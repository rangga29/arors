<?php

namespace App\Http\Controllers;

use function dd;
use function view;

class CekBpjsController extends Controller
{
    public function showPeserta()
    {
        return view('backend.bpjs-check.view-peserta');
    }

    public function showRujukan()
    {
        return view('backend.bpjs-check.view-rujukan');
    }
}
