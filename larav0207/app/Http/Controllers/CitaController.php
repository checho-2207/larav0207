<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Citas::all();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'vehicle_brand' => 'required|string|max:255',
            'vehicle_model' => 'required|string|max:255',
            'plate_number' => 'required|string|max:20',
            'mileage' => 'required|integer',
            'service_type' => 'required|string|max:255',
            'suggested_date' => 'required|date',
            'suggested_time' => 'required|date_format:H:i',
            'comments' => 'nullable|string',
        ]);

        Citas::create($request->all());
        return redirect()->route('citas.index')->with('success', 'Appointment created successfully.');
    }

    public function show(Citas $cita)
    {
        return view('citas.show', compact('cita'));
    }

    public function edit(Citas $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    public function update(Request $request, Citas $cita)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'vehicle_brand' => 'required|string|max:255',
            'vehicle_model' => 'required|string|max:255',
            'plate_number' => 'required|string|max:20',
            'mileage' => 'required|integer',
            'service_type' => 'required|string|max:255',
            'suggested_date' => 'required|date',
            'suggested_time' => 'required|date_format:H:i',
            'comments' => 'nullable|string',
        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Citas $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Appointment deleted successfully.');
    }
}
