<?php

namespace App\Http\Controllers;

use App\Models\OpeningHour;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    public function create() {
        $openingHour = OpeningHour::where('type', 'default')->first();

        return view('opening', compact('openingHour'));
    }

    public function store(Request $request) {
        $request->validate([
            'text' => 'required|string'
        ]);

        $openingHour = OpeningHour::where('type', 'default')->first();

        if ($openingHour) {
            $openingHour->update(['text' => $request->get('text')]);
        } else {
            OpeningHour::create([
                'text' => $request->get('text')
            ]);
        }

        return redirect()->back();
    }
}
