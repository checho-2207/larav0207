<?php

namespace App\Http\Controllers;

use App\Models\SolicitudServicio;
use App\Models\Usuario;
use App\Models\Cita;
use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SolicitudServicioController extends Controller
{
    public function index()
    {
        $solicitudes = SolicitudServicio::with(['usuario', 'cita'])->get();
        return view('solicitud_servicios.index', compact('solicitudes'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $citas = Citas::all();
        return view('solicitud_servicios.create', compact('usuarios', 'citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'citas_id' => 'required|exists:citas,id',
        ]);

        SolicitudServicio::create($request->all());
        return redirect()->route('solicitud_servicios.index')->with('success', 'Solicitud de servicio creada con éxito.');
    }

    public function show(SolicitudServicio $solicitudServicio)
    {
        return view('solicitud_servicios.show', compact('solicitudServicio'));
    }

    public function edit(SolicitudServicio $solicitudServicio)
    {
        $usuarios = Usuario::all();
        $citas = Citas::all();
        return view('solicitud_servicios.edit', compact('solicitudServicio', 'usuarios', 'citas'));
    }

    public function update(Request $request, SolicitudServicio $solicitudServicio)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'citas_id' => 'required|exists:citas,id',
        ]);

        $solicitudServicio->update($request->all());
        return redirect()->route('solicitud_servicios.index')->with('success', 'Solicitud de servicio actualizada con éxito.');
    }

    public function destroy(SolicitudServicio $solicitudServicio)
    {
        $solicitudServicio->delete();
        return redirect()->route('solicitud_servicios.index')->with('success', 'Solicitud de servicio eliminada con éxito.');
    }
}

