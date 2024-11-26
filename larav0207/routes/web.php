<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\SolicitudServicioController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\CambioRepuestoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TipoRepuestoController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('citas', CitaController::class);
Route::resource('mantenimientos', MantenimientoController::class);
Route::resource('solicitud_servicios', SolicitudServicioController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('cambio_repuestos', CambioRepuestoController::class);
Route::resource('vehiculos', VehiculoController::class);
Route::resource('pagos', PagoController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('tipo_repuestos', TipoRepuestoController::class);



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/citas/create', [CitaController::class, 'create'])->name('citas.create');
Route::get('/home', [HomeController::class, 'index'])->name('home');


