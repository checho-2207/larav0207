<?php

namespace App\Http\Controllers;

use App\Models\TipoRepuesto;
use App\Models\Proveedor;
use App\Models\CambioRepuesto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TipoRepuestoController extends Controller
{
    public function index()
    {
        $tipoRepuestos = TipoRepuesto::all();
        return view('tipo_repuestos.index', compact('tipoRepuestos'));
    }

    public function create()
    {
        $proveedores = Proveedor::all();
        $cambioRepuestos = CambioRepuesto::all();
        return view('tipo_repuestos.create', compact('proveedores', 'cambioRepuestos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'total' => 'required|integer',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cambio_id' => 'required|exists:cambio_repuestos,id',
        ]);

        TipoRepuesto::create($request->all());
        return redirect()->route('tipo_repuestos.index')->with('success', 'Tipo de repuesto registrado correctamente.');
    }

    public function show(TipoRepuesto $tipoRepuesto)
    {
        return view('tipo_repuestos.show', compact('tipoRepuesto'));
    }

    public function edit(TipoRepuesto $tipoRepuesto)
    {
        $proveedores = Proveedor::all();
        $cambioRepuestos = CambioRepuesto::all();
        return view('tipo_repuestos.edit', compact('tipoRepuesto', 'proveedores', 'cambioRepuestos'));
    }

    public function update(Request $request, TipoRepuesto $tipoRepuesto)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'total' => 'required|integer',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cambio_id' => 'required|exists:cambio_repuestos,id',
        ]);

        $tipoRepuesto->update($request->all());
        return redirect()->route('tipo_repuestos.index')->with('success', 'Tipo de repuesto actualizado correctamente.');
    }

    public function destroy(TipoRepuesto $tipoRepuesto)
    {
        $tipoRepuesto->delete();
        return redirect()->route('tipo_repuestos.index')->with('success', 'Tipo de repuesto eliminado correctamente.');
    }
}
