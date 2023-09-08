<?php

use App\Http\Controllers\Ecolcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/vue')->name('vue.')->controller(Ecolcontroller::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/new', 'create')->name('create');
    Route::post('/new', 'save'); 
    Route::get('/{etudiant}/edit', 'edit')->name('edit');
    Route::post('/{etudiant}/edit', 'update');
});
