<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pageprincipal;
use App\Http\Controllers\Ajouter;
use App\Http\Controllers\AjouterBaseDeDonnee;
use App\Http\Controllers\Supprimer;
use App\Http\Controllers\Modifier;
use App\Http\Controllers\Modifierdonnee;

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

// Route::get('/', function () {
//     return view('Pageprincipal');
// });

Route::get('/', [Pageprincipal::class, 'show']);

Route::get('/ajouter', [Ajouter::class, 'show']);

Route::post('/ajouterbasededonnee', [AjouterBaseDeDonnee::class, 'show']);

Route::post('/modifierdonnee/{id}', [Modifierdonnee::class, 'show']);

Route::get('/supprimer/{id}', [Supprimer::class, 'show']);

Route::get('/modifier/{id}', [Modifier::class, 'show']);
