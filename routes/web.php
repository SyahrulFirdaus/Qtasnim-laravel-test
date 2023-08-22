<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\McoaController;


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
    return view('/auth/login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/mcoa/vtester', [McoaController::class, 'vtester']);


    Route::get('/mcoa/vingridients', [McoaController::class, 'vingridients']);
    Route::post('/mcoa/storeIngridients', [McoaController::class, 'storeIngridients']);
    Route::delete('/mcoa/vingridients/{id}', [McoaController::class, 'destroyIngridients']);
    Route::get('/mcoa/{id}/editIngridients', [McoaController::class, 'editIngridients']);
    Route::put('/mcoa/vingridients/{id}', [McoaController::class, 'updateIngridients']);
    Route::get('/mcoa/exportIngridients', [McoaController::class, 'exportIngridients']);
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
