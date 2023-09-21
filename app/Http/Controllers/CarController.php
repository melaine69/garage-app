<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cars = Car::orderBy('created_at')->get();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $car = null;
        return view('cars.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        // on récupère l'utilisateur en cours
        $currentUser = $request->user();

        // on crée une nouvelle entrée cars grâce à la relation user <-> cars
        $car = $currentUser->cars()->create($request->validated());

        return redirect()->route('cars.index')->with("status", __("L'annonce pour la voiture <strong>:brand :model </strong> été ajoutée.",  ['brand' => $car->brand, 'model' => $car->model]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCarRequest $request, Car $car)
    {
        $car->update($request->validated());

        return redirect()->route('cars.index')->with("status", __("L'annonce pour la voiture <strong>:brand :model </strong> été modifiée.",  [
            'brand' => $car->brand,
            'model' => $car->model
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
