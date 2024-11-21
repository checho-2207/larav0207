<?php

namespace App\Http\Controllers;

use App\Models\CambioRepuesto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CambioRepuestoController extends Controller
{
    public function index()
    {
        $cambioRepuestos = CambioRepuesto::all();
        return view('cambio_repuestos.index', compact('cambioRepuestos'));
    }

    public function create()
    {
        return view('cambio_repuestos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stock' => 'required|integer',
            'name' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'mantenimiento_id' => 'required|exists:mantenimientos,id',
        ]);

        CambioRepuesto::create($request->all());
        return redirect()->route('cambio_repuestos.index')->with('success', 'Cambio de repuesto creado.');
    }

    public function show(CambioRepuesto $cambioRepuesto)
    {
        return view('cambio_repuestos.show', compact('cambioRepuesto'));
    }

    public function edit(CambioRepuesto $cambioRepuesto)
    {
        return view('cambio_repuestos.edit', compact('cambioRepuesto'));
    }

    public function update(Request $request, CambioRepuesto $cambioRepuesto)
    {
        $request->validate([
            'stock' => 'required|integer',
            'name' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'mantenimiento_id' => 'required|exists:mantenimientos,id',
        ]);

        $cambioRepuesto->update($request->all());
        return redirect()->route('cambio_repuestos.index')->with('success', 'Cambio de repuesto actualizado.');
    }

    public function destroy(CambioRepuesto $cambioRepuesto)
    {
        $cambioRepuesto->delete();
        return redirect()->route('cambio_repuestos.index')->with('success', 'Cambio de repuesto eliminado.');
    }
}