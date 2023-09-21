<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\OpeningHour;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $cars = Car::all();

        return view('welcome', compact('cars'));
    }

    public function dashboard() {
        $employeeCount = User::where('role', 'employee')->count();
        $customerCount = User::where('role', 'customer')->count();
        $carCount = Car::count();


        return view('dashboard', compact('employeeCount', 'customerCount', 'carCount'));
    }

    public function opening() {
        return view('pages.opening');
    }

    public function contact() {
        return view('pages.contact');
    }
}
