<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tech; // memanggil model technologies

class TechController extends Controller
{
    public function home()
    {
        return view( "home  ", 
        [
            "title" => "Home",  
            "technologies" => tech::all() // mengambil semua data dari technologies
        ] );
    }

    public function about()
    {
        return view( "about  ", [
            "title" => "About", 
           
        ] );
    }

    public function tech($slug)
    {
            return view( "tech",[
                "title" => "Tech",
                "item" => tech::find($slug) // mengambil data berdasarkan slug
            ]);
        
    }

}
