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
            'date' => 'required|date',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        Citas::create($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita creada con éxito.');
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
            'date' => 'required|date',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada con éxito.');
    }

    public function destroy(Citas $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada con éxito.');
    }
}
