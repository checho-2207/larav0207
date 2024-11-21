<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FacturaController extends Controller
{
    // Listar facturas
    public function index()
    {
        $facturas = Factura::with('mantenimiento')->get();
        return view('facturas.index', compact('facturas'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('facturas.create');
    }

    // Guardar nueva factura
    public function store(Request $request)
    {
        $request->validate([
            'details' => 'required|string|max:255',
            'date' => 'required|date',
            'mantenimiento_id' => 'required|exists:mantenimientos,id',
        ]);

        Factura::create($request->all());
        return redirect()->route('facturas.index')->with('success', 'Factura creada con éxito.');
    }

    // Mostrar una factura específica
    public function show(Factura $factura)
    {
        return view('facturas.show', compact('factura'));
    }

    // Mostrar formulario de edición
    public function edit(Factura $factura)
    {
        return view('facturas.edit', compact('factura'));
    }

    // Actualizar una factura
    public function update(Request $request, Factura $factura)
    {
        $request->validate([
            'details' => 'required|string|max:255',
            'date' => 'required|date',
            'mantenimiento_id' => 'required|exists:mantenimientos,id',
        ]);

        $factura->update($request->all());
        return redirect()->route('facturas.index')->with('success', 'Factura actualizada con éxito.');
    }

    // Eliminar una factura
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route('facturas.index')->with('success', 'Factura eliminada con éxito.');
    }
}
