<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('kurumsal/{kurumsal}', [HomeController::class, 'kurumsal']);
Route::get('insan-kaynaklari/{ik}', [HomeController::class, 'insanKaynaklari']);
Route::get('haberler/{haber}', [HomeController::class, 'haber']);
Route::get('hizmetler/{slug1}', [HomeController::class, 'tumHizmet']);
Route::get('hizmetler/{slug1}/{slug2}', [HomeController::class, 'icHizmet']);
Route::view('sikayet-formu','sikayet-formu' );

Route::view('sorular', 'sorular');
require __DIR__.'/auth.php';
// Bu route en sonda olmak zorunda çünkü ancak üst satırlarda yer alanlardan uygun alan bulanamaz ise çağırılmalı
Route::get('/{slug}', [HomeController::class, 'slug'])->where('slug', '^((?!nova).)*$');
