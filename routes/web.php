<?php

use App\Http\Controllers\ControlerGeneral;
use App\Http\Controllers\Dashboard\ActividadesController;
use App\Http\Controllers\Dashboard\InicioController;
use App\Http\Controllers\Dashboard\NosotrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

                                                    // PARTE INFORMATIVA

Route::get('/',[ControlerGeneral::class, 'index'])->name('inicio');

Route::get('/nosotros',[ControlerGeneral::class, 'nosotros'])->name('nosotros');

Route::get('/detalles{id}',[ControlerGeneral::class, 'inf_detallada'])->name('detalles');

Route::get('/actividades',[ControlerGeneral::class, 'actividades'])->name('actividades');

Route::get('/actividadesDetalladas{id}',[ControlerGeneral::class, 'actividades_detalladas'])->name('detallesActivi');

Route::get('/proyecto',[ControlerGeneral::class, 'proyectos'])->name('proyectos');

Route::get('/proyectoDetalle{id}',[ControlerGeneral::class, 'proyecto_Detalle'])->name('proyectoDetallado');

Route::get('/anuario',[ControlerGeneral::class, 'anuario'])->name('anuario');

Route::get('/anuario{generacion}',[ControlerGeneral::class, 'anuarioSeleccion'])->name('generacion');

Route::get('/contacto',[ControlerGeneral::class, 'contactanos'])->name('contacto');



                                            // CIERRE PARTE INFORMATIVA

                                            // DASHBOARD
Route::resource('/administradorSiquirres52',InicioController::class);
Route::resource('/actividadesSiquirres52',ActividadesController::class);
Route::resource('/nosotrosSiquirres52',NosotrosController::class);

Route::delete('eliminar/{id}',[InicioController::class, 'eliminarPagina'])->name('eliminarP');
Route::delete('eliminarAdministrativos/{id}',[NosotrosController::class, 'destroyAdministrativo'])->name('eliminarAdmin');
Route::delete('eliminarEstadisticas/{id}',[NosotrosController::class, 'destroyEstadisticas'])->name('eliminarEsta');

Route::put('/editar/{id}', [InicioController::class, 'editarPaginasImportantes'])->name('editarPag');
Route::put('/editarActividades/{id}', [ActividadesController::class, 'updatePrincipal'])->name('actividadPrincipal');
Route::put('/editarAdmin/{id}', [NosotrosController::class, 'updateAdmin'])->name('editarAdmin');


Route::post('/crearAdministrativo/', [NosotrosController::class, 'storeAdmin'])->name('crearAdmin');
Route::post('/crearEstadistica/', [NosotrosController::class, 'storeEstadistica'])->name('crearEsta');


