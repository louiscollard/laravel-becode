<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/create', [RestaurantController::class, 'create']);
Route::post('/restaurants', [RestaurantController::class, 'store']);
// Route::post('/restaurants', [RestaurantController::class, 'create']);

Route::put('/restaurants/{restaurant:id}/edit', [RestaurantController::class, 'edit']);

Route::delete('/restaurants/{restaurant:id}', [RestaurantController::class, 'destroy']);