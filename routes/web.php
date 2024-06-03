<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralController;

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

Route::get('/', [GeneralController::class, 'landing_page']);
Route::get('/register', [GeneralController::class, 'register_page']);
Route::get('/login', [GeneralController::class, 'login_page']);
Route::get('/home', [GeneralController::class, 'home_page']);
Route::get('/artikel', [GeneralController::class, 'artikel_page']);
Route::get('/klasifikasi-gangguan-tidur', [GeneralController::class, 'klasifikasi_page']);
Route::get('/form-klasifikasi-gangguan-tidur', [GeneralController::class, 'formKlasifikasi_page']);
Route::get('/hasil-klasifikasi-gangguan-tidur', [GeneralController::class, 'hasilKlasifikasi_page']);
Route::get('/form-kualitas-tidur', [GeneralController::class, 'formKualitasTidur_page']);
Route::get('/form-tingkat-stres', [GeneralController::class, 'formTingkatStres_page']);

// API Route
Route::post('/api/register', [GeneralController::class, 'register_process']);
Route::post('/api/login', [GeneralController::class, 'login_process']);
