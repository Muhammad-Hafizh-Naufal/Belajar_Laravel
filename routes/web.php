<?php

use Illuminate\Support\Facades\Route;
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
Route::get("/", function () {
    return view( "home  ", 
    [
        "title" => "Home",  
        "technologies" => tech::all() // mengambil semua data dari technologies
    ] );
});

// Route ke about
Route::get("/about", function () {
    return view( "about  ", [
        "title" => "About", 
       
    ] );
});

// Route ke tech
Route::get("/tech/{slug}", function ($slug) {
    return view( "tech",[
        "title" => "Tech",
        "item" => tech::find($slug) // mengambil data berdasarkan slug
    ]);
});