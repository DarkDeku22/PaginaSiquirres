<?php

use App\Http\Controllers\ControlerGeneral;
use App\Http\Controllers\Dashboard\InicioController;
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

Route::delete('eliminar/{id}',[InicioController::class, 'eliminarPagina'])->name('eliminarP');

