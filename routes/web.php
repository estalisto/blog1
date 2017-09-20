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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ruta_simple',function(){
    //var_dump('hola');//imprime todo el objeto
 //dd('suma');
 return "pruebas view";
 //http://blog2.dev/ruta_simple
});
Route::get('/sumar/{operador1}/{operador2}',function($operador1,$operador2){
    return $operador1+$operador2;
    //http://blog2.dev/sumar2/2/4
});

Route::get('/sumarValoresOpcional/{operador1}/{operador2?}',function($operador1,$operador2=3){
    return $operador1+$operador2;
    //http://blog2.dev/sumarValoresOpcional/2
    
});

Route::get('/array/{numero}',function($numero){
    
$array=[];
for($i=0;$i<$numero;$i++){
    $array[]=uniqid();


}
return response()->json($array);

    //http://blog2.dev/sumarValoresOpcional/2
    
})->where(['numero'=>'[0-9]+']);