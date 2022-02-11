<?php

use App\Classes\Cicle;
use App\Classes\Curs;
use Illuminate\Support\Facades\Route;
use

$ciclo = [];
$cursos = [];
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
    return view('index');
});
Route::get('/cicles', [App\Http\Controllers\CicleController::class,'index']{
    //Creamos los dos ciclos
    $ciclo1 = new Cicle(1, 'DAW', 'Desenvolupament Aplicacions Web');
    $ciclo2 = new Cicle(
        2,
        'DAM',
        'Desenvolupament Aplicacions Multiplataforma'
    );
    //Añadimos los dos ciclos a l'array $ciclo
    $ciclo[] = $ciclo1;
    $ciclo[] = $ciclo2;
    return view('cicles.index', compact('ciclo'));
});
Route::get('/cursos', function () {
    //Creamos los tres cursos
    $curs1 = new Curs(
        1,
        'DAW2B',
        'Desenvolupament Aplicacions Web de primer matí A',
        'DAW'
    );
    $curs2 = new Curs(
        2,
        'DAW2A',
        'Desenvolupament Aplicacions Web de segon matí A',
        'DAW'
    );
    $curs3 = new Curs(
        3,
        'DAW2B',
        'Desenvolupament Aplicacions Web de segon matí B',
        'DAW'
    );
    //Añadimos los tres cursos a l'array $cursos
    $cursos[] = $curs1;
    $cursos[] = $curs2;
    $cursos[] = $curs3;

    return view('cursos.index', compact('cursos'));
});
