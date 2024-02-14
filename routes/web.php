<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::resource("/students", StudentController::class);

Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
    Route::get('/students', 'index');
    Route::get('/students/create', 'create');
    Route::post('/students', 'store');
    Route::get('/students/{student}/edit', 'edit');
    Route::put('/students/{student}', 'update');
    Route::delete('/students/{student}', 'destroy');
});
