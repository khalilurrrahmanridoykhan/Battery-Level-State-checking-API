<?php

use App\Http\Controllers\LightAutoMatoinController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/light-setstatusoff',[LightAutoMatoinController::class, 'lightsetoff'])->name('lightautomationsetoff');
Route::post('/light-setstatuson',[LightAutoMatoinController::class, 'lightseton'])->name('lightautomationseton');
Route::get('/light-status', [LightAutoMatoinController::class, 'lightget'])->name('lightautomationget');
Route::get('/light-setstatusoff-get', [LightAutoMatoinController::class, 'lightsetoffget'])->name('lightsetoffget');
Route::get('/light-setstatuson-get', [LightAutoMatoinController::class, 'lightsetonget'])->name('lightsetonget');


