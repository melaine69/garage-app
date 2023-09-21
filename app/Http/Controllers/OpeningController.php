<?php

namespace App\Http\Controllers;

use App\Models\OpeningHour;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    public function create() {
        return view('opening');
    }

    public function store(Request $request) {
        // Validate the request data for each day
        $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        foreach ($daysOfWeek as $day) {
            $rules = [
                "opening_hours.{$day}.from" => 'required|date_format:H:i:s',
                "opening_hours.{$day}.to" => 'required|date_format:H:i:s|after:opening_hours.'.$day.'.from_time',
            ];

            $request->validate($rules);

            // Check if an opening hour record already exists for the specified day
            $openingHour = OpeningHour::where('day_of_week', $day)->first();

            if ($openingHour) {
                // If a record exists, update it with the new values
                $openingHour->update([
                    'from_time' => $request->input("opening_hours.{$day}.from"),
                    'to_time' => $request->input("opening_hours.{$day}.to"),
                ]);
            } else {
                // If no record exists, create a new one
                OpeningHour::create([
                    'day_of_week' => $day,
                    'from_time' => $request->input("opening_hours.{$day}.from"),
                    'to_time' => $request->input("opening_hours.{$day}.to"),
                ]);
            }
        }

        return redirect()->back();
    }
}
