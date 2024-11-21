<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MantenimientoController extends Controller
{
    public function index()
    {
        $mantenimientos = Mantenimiento::all();
        return view('mantenimientos.index', compact('mantenimientos'));
    }

    public function create()
    {
        return view('mantenimientos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type_maintenance' => 'required|string',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after:date_start',
            'warranty' => 'required|boolean',
            'solicitud_id' => 'required|exists:solicitud_servicios,id',
        ]);

        Mantenimiento::create($request->all());
        return redirect()->route('mantenimientos.index')->with('success', 'Mantenimiento creado con éxito.');
    }

    public function show(Mantenimiento $mantenimiento)
    {
        return view('mantenimientos.show', compact('mantenimiento'));
    }

    public function edit(Mantenimiento $mantenimiento)
    {
        return view('mantenimientos.edit', compact('mantenimiento'));
    }

    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        $request->validate([
            'type_maintenance' => 'required|string',
            'date_start' => 'required|date',
            'date_end' => 'required|date|after:date_start',
            'warranty' => 'required|boolean',
            'solicitud_id' => 'required|exists:solicitud_servicios,id',
        ]);

        $mantenimiento->update($request->all());
        return redirect()->route('mantenimientos.index')->with('success', 'Mantenimiento actualizado con éxito.');
    }

    public function destroy(Mantenimiento $mantenimiento)
    {
        $mantenimiento->delete();
        return redirect()->route('mantenimientos.index')->with('success', 'Mantenimiento eliminado con éxito.');
    }
}
