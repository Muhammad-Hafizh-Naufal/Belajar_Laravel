<?php

use App\Http\Controllers\TechController; // memanggil controller
use Illuminate\Support\Facades\Route; // memanggil route
use App\Models\tech; // memanggil model technologies

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


// Route ke home
Route::get("/",[TechController::class, "home"] ); // memanggil Techcontroller dengan fungsi home

// Route ke about
Route::get("/about", [TechController::class, "about"] ); // memanggil Techcontroller dengan fungsi about

// Route ke tech
Route::get("/tech/{slug}", [TechController::class, "tech"] ); // memanggil Techcontroller dengan fungsi tech