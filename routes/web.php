<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('usuaris', function(){
    return view('usuaris');
});

Route::get('/', function () {
    return view('index');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('editar_usuari/{id}', function ($id) {
    return view('editar_usuari',["id"=>$id]);
});

Route::get('gravar_edicio_usuari', function(Request $request) {
    
    return view('gravar_edicio_usuari',$request);
});




Route::get('contadores', function () {
    return view('templates/panels/panel1/contadores');
});











/* Ajax crud */
Route::get('p1_usuarios', function () {
    return view('templates/panels/panel1/p1_usuarios');
});

Route::get('p1_proyecto', function () {
    return view('templates/panels/panel1/p1_proyecto');
});

Route::get('p1_fase', function () {
    return view('templates/panels/panel1/p1_fase');
});

Route::get('p1_dedicacions', function () {
    return view('templates/panels/panel1/p1_dedicacions');
});

Route::get('p1_tarea', function () {
    return view('templates/panels/panel1/p1_tarea');
});


// AJAX GET EDITAR BOX

Route::get('p1_usuarios_e/{id}', function ($id) {
    return view('templates/panels/panel1/editar/p1_usuarios_e',["id"=>$id]);
});

Route::get('p1_proyectos_e/{id}', function ($id) {
    return view('templates/panels/panel1/editar/p1_proyectos_e',["id"=>$id]);
});

Route::get('p1_fase_e/{id}', function ($id) {
    return view('templates/panels/panel1/editar/p1_fase_e',["id"=>$id]);
});
Route::get('p1_tarea_e/{id}', function ($id) {
    return view('templates/panels/panel1/editar/p1_tarea_e',["id"=>$id]);
});



// AJAX GUARDAR EDITADO

Route::get('p1_usuarios_g/{id}/{nombre}/{apellido}', function ($id, $nombre, $apellido) {
    return view('templates/panels/panel1/editar/guardar/p1_usuarios_g',["id"=>$id,"nombre"=>$nombre,"apellido"=>$apellido]);
});

Route::get('p1_proyecto_g/{id}/{nombre}', function ($id, $nombre) {
    return view('templates/panels/panel1/editar/guardar/p1_proyecto_g',["id"=>$id,"nombre"=>$nombre]);
});

Route::get('p1_fase_g/{id}/{fase}', function ($id, $fase) {
    return view('templates/panels/panel1/editar/guardar/p1_fase_g',["id"=>$id,"fase"=>$fase]);
});

Route::get('p1_tarea_g/{id}/{tarea}/{proyecto}/{fase}', function ($id, $tarea, $proyecto, $fase) {
    return view('templates/panels/panel1/editar/guardar/p1_tarea_g',["id"=>$id,"tarea"=>$tarea,"proyecto"=>$proyecto ,"fase"=>$fase]);
});



//  AJAX ELIMINAR

Route::get('p1_eliminar_usuario/{id}', function ($id) {
    return view('templates/panels/panel1/eliminar/p1_eliminar_usuario',["id"=>$id]);
});

Route::get('p1_eliminar_proyecto/{id}', function ($id) {
    return view('templates/panels/panel1/eliminar/p1_eliminar_proyecto',["id"=>$id]);
});

Route::get('p1_eliminar_fase/{id}', function ($id) {
    return view('templates/panels/panel1/eliminar/p1_eliminar_fase',["id"=>$id]);
});

Route::get('p1_eliminar_tarea/{id}', function ($id) {
    return view('templates/panels/panel1/eliminar/p1_eliminar_tarea',["id"=>$id]);
});

Route::get('p1_eliminar_dedicacio/{id}', function ($id) {
    return view('templates/panels/panel1/eliminar/p1_eliminar_dedicacio',["id"=>$id]);
});


// AJAX AÑADIR  GET BOX

Route::get('p1_añadir_usuario', function () {
    return view('templates/panels/panel1/añadir/p1_añadir_usuario');
});

Route::get('p1_añadir_proyecto', function () {
    return view('templates/panels/panel1/añadir/p1_añadir_proyecto');
});


Route::get('p1_añadir_fase', function () {
    return view('templates/panels/panel1/añadir/p1_añadir_fase');
});

Route::get('p1_añadir_tarea', function () {
    return view('templates/panels/panel1/añadir/p1_añadir_tarea');
});

Route::get('p1_añadir_dedicacio', function () {
    return view('templates/panels/panel1/añadir/p1_añadir_dedicacio');
});


// AJAX GUARDAR AÑADIR

Route::get('p1_guardar_usuario_a/{nombre}/{apellido}', function ($nombre, $apellido) {
    return view('templates/panels/panel1/añadir/guardar/p1_guardar_usuario_a',["nombre"=>$nombre,"apellido"=>$apellido]);
});

Route::get('p1_guardar_proyecto_a/{proyecto}', function ($proyecto) {
    return view('templates/panels/panel1/añadir/guardar/p1_guardar_proyecto_a',["proyecto"=>$proyecto]);
});

Route::get('p1_guardar_fase_a/{fase}', function ($fase) {
    return view('templates/panels/panel1/añadir/guardar/p1_guardar_fase_a',["fase"=>$fase]);
});

Route::get('p1_guardar_tarea_a/{tarea}/{proyecto}/{fase}/{dataest}', function ($tarea, $proyecto, $fase, $dataest) {
    return view('templates/panels/panel1/añadir/guardar/p1_guardar_tarea_a',["tarea"=>$tarea, "proyecto"=>$proyecto,"fase"=>$fase,"dataest"=>$dataest]);
});

Route::get('p1_guardar_dedicacion_a/{descripcion}/{dia}/{hora}/{horas}/{usuario}/{tarea}', function ($descripcion, $dia, $hora,$horas, $usuario, $tarea) {
    return view('templates/panels/panel1/añadir/guardar/p1_guardar_dedicacion_a',["descripcion"=>$descripcion, "dia"=>$dia,"hora"=>$hora ,"horas"=>$horas,"usuario"=>$usuario, "tarea"=>$tarea]);
});

//FINALIZAR TAREA

Route::get('finalizar_tarea/{id}', function ($id) {
    return view('templates/panels/panel1/finalizar/finalizar_tarea',["id"=>$id]);
});


// CALENDARI
Route::get('calendario', function () {
    return view('templates/panels/panel2/calendario');
});


Route::get('calendario/{mes}/{any}/{stat}', function ($mes, $any, $stat) {
    return view('templates/panels/panel2/calendario',['mes'=>$mes,'any'=>$any,'stat'=>$stat]);
});


Route::get('horas', function () {
    return view('templates/panels/panel2/horas');
});

Route::get('horas/{fecha}', function ($fecha) {
    return view('templates/panels/panel2/horas',['fecha'=>$fecha]);
});

Route::get('get_box_add/{fecha}', function ($fecha) {
    return view('templates/panels/panel2/get_box_add',['fecha'=>$fecha]);
});

