<?php

use App\Http\Controllers\AvisoController;
use App\Http\Controllers\OpinionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fotos', [App\Http\Controllers\FotoController::class, 'index'])->name('fotos');
Route::post('/subirFoto', [App\Http\Controllers\FotoController::class, 'subirFoto'])->name('subirFoto');
Route::get('/foto/{ruta}', [App\Http\Controllers\FotoController::class, 'mostrarFoto']);
Route::post('/eliminarFoto', [App\Http\Controllers\FotoController::class, 'eliminarFoto'])->name('eliminarFoto');
Route::post('/subirComentario', [App\Http\Controllers\FotoController::class, 'subirComentario'])->name('subirComentario');
Route::post('/eliminarComentario', [App\Http\Controllers\FotoController::class, 'eliminarComentario'])->name('eliminarComentario');
Route::post('/comentario/{id}/like', [App\Http\Controllers\LikeController::class, 'likeComentario'])->name('comentario.like');
Route::get('/enviarApi', [App\Http\Controllers\FotoController::class, 'enviarApi'])->name('enviarApi');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::get('/confirmar-eliminacion', [App\Http\Controllers\EliminarController::class, 'confirmarEliminacion'])->name('confirmar.eliminacion');
Route::delete('/eliminar-perfil', [App\Http\Controllers\EliminarController::class, 'eliminarPerfil'])->name('perfil.eliminar');
Route::get('/terminos', [App\Http\Controllers\TerminosController::class, 'metodo'])->name('Terminos');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');


#Rutas opinión
Route::controller(OpinionController::class)->group(function () {

    Route::get('/opiniones/foro', 'mostrarForo')->name('opiniones.foro');
    Route::get('/opiniones/Mopiniones', 'mostrarOpiniones')->name('opiniones');
    Route::get('/opiniones/crear', 'formCrear')->name('opiniones.crear');
    Route::post('/opiniones/Almacenar', 'crearOpinion')->name('opiniones.almacenar');
    Route::get('/opiniones/eliminar/{id}','eliminarOpinion')->name('opiniones.eliminar');
    Route::post('/opiniones/actualizar/{id}', 'actualizarOpinion')->name('opiniones.actualizar');
    
});

#Rutas avisos
Route::any('/cliente/notificar', [NotificacionController::class, 'notificarPromocion'])->name('cliente.notificar');
Route::any('/cliente/buscar', [AvisoController::class, 'RecuperarCliente'])->name('cliente.buscar');
Route::any('/cliente/registro', [AvisoController::class, 'RegistroCliente'])->name('cliente.registro');
Route::any('/cliente/crear', [AvisoController::class, 'IngresarCliente'])->name('cliente.crear');
Route::any('/cliente/encontrar', [AvisoController::class, 'BuscarCliente'])->name('cliente.encontrar');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
