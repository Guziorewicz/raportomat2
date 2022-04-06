<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaportyController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirects', 'App\Http\Controllers\HomeController@index');

Route::resource('raporty', RaportyController::class, ['names' => 'raporty']);

Route::post('/raporty/store', [RaportyController::class, 'store'])->name('raporty.store'); 
Route::get('/raporty/show/{id}', [RaportyController::class, 'show'])->name('raporty.show'); 
