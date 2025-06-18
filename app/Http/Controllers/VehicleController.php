<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     * Done Task, next create
     */
    public function index(string $search = null)
    {
        // Get Data from DB
        $data = Vehicle::with("fuelType", "carType")->get();
        return view("vehicles.index", [
            "vehicles" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * Create Form
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'maker' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'vin' => 'required|string|size:17|unique:vehicles,vin',
            'license_plate' => 'required|string|max:20|unique:vehicles,license_plate',
            'kilometers' => 'required|numeric|min:0',
            'address' => 'nullable|string|max:255',
            'user_id' => 'required|exists:users,id',
            'fuel_type_id' => 'required|exists:fuel_types,id',
            'car_type_id' => 'required|exists:car_types,id',
        ]);
        if(!$validate){
            return redirect()->back()->withErrors($validate)->withInput();
        }
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
