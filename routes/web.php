<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaportyController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\juzerController;

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

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


Route::get('redirects', 'App\Http\Controllers\juzerController@index');
//Route::get('redirects', [HomeController::class, 'index'])->name('index');

Route::resource('raporty', RaportyController::class, ['names' => 'raporty']);

Route::post('/raporty/store', [RaportyController::class, 'store'])->name('raporty.store'); 
Route::get('/raporty/show/{id}', [RaportyController::class, 'show'])->name('raporty.show'); 

Route::resource('juzers', juzerController::class, ['names' => 'juzers']);

Route::get('juzers/edit/{id}', [juzerController::class, 'edit'])->name('admin.editUser');
Route::get('juzers/editModule/{id}', [juzerController::class, 'editModule'])->name('admin.editModule');

