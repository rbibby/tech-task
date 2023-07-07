<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessCsvController;
use App\Http\Controllers\UploadCsvController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', UploadCsvController::class)->name('upload-csv');
Route::post('process-csv', ProcessCsvController::class)->name('process-csv');
