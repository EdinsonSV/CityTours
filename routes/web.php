<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/TrabajoFinal', function(){
    $var1 = '0';
    return view('final',compact("var1"));
});


Route::get('/amazonas', function(){
    return view('amazonas');
});

Route::get('/ancash', function(){
    return view('ancash');
});

Route::get('/apurimac', function(){
    return view('apurimac');
});

Route::get('/arequipa', function(){
    return view('arequipa');
});

Route::get('/ayacucho', function(){
    return view('ayacucho');
});

Route::get('/cajamarca', function(){
    return view('cajamarca');
});

Route::get('/cusco', function(){
    return view('cusco');
});

Route::get('/huancavelica', function(){
    return view('huancavelica');
});

Route::get('/huanuco', function(){
    return view('huanuco');
});

Route::get('/ica', function(){
    return view('ica');
});

Route::get('/junin', function(){
    return view('junin');
});

Route::get('/lalibertad', function(){
    return view('lalibertad');
});

Route::get('/lambayeque', function(){
    return view('lambayeque');
});

Route::get('/lima', function(){
    return view('lima');
});

Route::get('/loreto', function(){
    return view('loreto');
});

Route::get('/madrededios', function(){
    return view('madrededios');
});

Route::get('/moquegua', function(){
    return view('moquegua');
});

Route::get('/pasco', function(){
    return view('pasco');
});

Route::get('/piura', function(){
    return view('piura');
});

Route::get('/puno', function(){
    return view('puno');
});

Route::get('/sanmartin', function(){
    return view('sanmartin');
});

Route::get('/tacna', function(){
    return view('tacna');
});

Route::get('/tumbes', function(){
    return view('tumbes');
});

Route::get('/ucayali', function(){
    return view('ucayali');
});
