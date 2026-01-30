<?php

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
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, "index"] );
Route::post("/todos", [TodoController::class,"store"] );
Route::patch("/todos/{todo}", [TodoController::class,"toggle"] );
Route::delete("/todos/{todo}", [TodoController::class,"destroy"] );

// Route::get('/', function () {
//     return view('welcome');
// });
