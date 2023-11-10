<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function __construct()
    {
        // $this->
        // middleware('auth')->
        // except('index');
    }

    public function index(Request $request)
    {
        return redirect('dashboard');
//        if (Auth::user()) {
//            return redirect('index');
//        } else {
//            return redirect('login');
//        }
    }

    public function root($first)
    {
        if ($first == "assets")
            return redirect('home');

        return view($first);
    }

    public function secondLevel($first, $second)
    {
        if ($first == "assets")
            return redirect('home');

        return view($first .'.'. $second);
    }

    public function thirdLevel($first, $second, $third)
    {
        if ($first == "assets")
            return redirect('home');

        return view($first . '.' . $second . '.' . $third);
    }
}
