<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        return view('vehiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'plate' => 'required|string|max:255',
            'mantenimiento_id' => 'required|exists:mantenimientos,id',
        ]);

        Vehiculo::create($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo creado correctamente.');
    }

    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'model' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'plate' => 'required|string|max:255',
            'mantenimiento_id' => 'required|exists:mantenimientos,id',
        ]);

        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado correctamente.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado correctamente.');
    }
}
