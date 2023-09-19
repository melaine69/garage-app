<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $cars = Car::all();

        return view('welcome', compact('cars'));
    }

    public function dashboard() {
        return view('dashboard');
    }
}
