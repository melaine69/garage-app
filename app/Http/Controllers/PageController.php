<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\OpeningHour;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(Request $request) {
        $filters = ['km', 'price', 'year'];
        $query = Car::query();

        foreach ($filters as $filter) {
            $minKey = $filter . '_min';
            $maxKey = $filter . '_max';

            if ($request->filled($minKey)) {
                $query->where($filter, '>=', $request->$minKey);
            }

            if ($request->filled($maxKey)) {
                $query->where($filter, '<=', $request->$maxKey);
            }
        }

        $cars = $query->paginate(21);

        $appliedFilters = [];
        foreach ($filters as $filter) {
            $minKey = $filter . '_min';
            $maxKey = $filter . '_max';

            if ($request->input($minKey)) {
                $appliedFilters[$minKey] = $request->input($minKey);
            }

            if ($request->input($maxKey)) {
                $appliedFilters[$maxKey] = $request->input($maxKey);
            }
        }

        return view('welcome', compact('cars', 'appliedFilters'));
    }

    public function dashboard() {
        $adminCount = User::where('role', 'admin')->count();
        $employeeCount = User::where('role', 'employee')->count();
        $carCount = Car::count();


        return view('dashboard', compact('adminCount', 'employeeCount', 'carCount'));
    }

    public function opening() {
        $openingHour = OpeningHour::where('type', 'default')->first();

        return view('pages.opening', compact('openingHour'));
    }

    public function contact() {
        return view('pages.contact');
    }

    public function terms() {
        return view('pages.terms');
    }
}
