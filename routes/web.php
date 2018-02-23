<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route :: get('algo', function (){
   return view('mivista');
});

Route::get('saludo/{nombre}', function($nombre = "Invitado"){
    return "<h1>Hola $nombre</h1>";
})-> where('nombre',"[A-Za-z]+");

Route::get('prueba',['as'=>'alias', function($nombre = "Invitado2") {
    return "<h1>Estamos usando un alias $nombre</h1>";
}]);
Route :: get('vista/{nombre?}', function ($nombre = "Invitado3"){
    //return view('mivistaretorno',["nombre"=> $nombre]);
    //return view('mivistaretorno')-> with(['nombre'=>$nombre]);
    return view('mivistaretorno',compact('nombre')); //metodo recomendado
});

Route::get('herencia}', function (){
    return view('mivistaretorno');
});

Route::post('herencia2',['uses'=>'MiControlador@inicio']);

