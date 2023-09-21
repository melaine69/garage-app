<?php

namespace App\Http\Controllers;

use App\Models\OpeningHour;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    /**
     * @throws AuthorizationException
     */
    public function create() {
        $this->authorize('create', OpeningHour::class);

        $openingHour = OpeningHour::where('type', 'default')->first();

        return view('opening', compact('openingHour'));
    }

    public function store(Request $request) {
        $this->authorize('create', OpeningHour::class);

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

        return redirect()->back()->with('status', __('Les horaires ont bien été mis à jour.'));
    }
}
