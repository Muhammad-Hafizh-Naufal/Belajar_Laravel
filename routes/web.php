<?php

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



Route::get("/", function () {
    return view( "home  ", 
    [
        "title" => "Home",  
        "technologies" => [
            [ 
                "title" => "Laravel",
                "slug" => "laravel",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, aperiam! Unde, id culpa ex suscipit ipsa autem quibusdam! Doloremque dolorem sapiente vero sequi nam aliquid illo officia, at quibusdam eum sunt omnis eos quod similique id veniam! Recusandae numquam magni cum voluptatum atque iusto neque necessitatibus totam voluptate. Laboriosam, placeat."
            ],
            [ 
                "title" => "ReactJS",
                "slug" => "reactjs",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, aperiam! Unde, id culpa ex suscipit ipsa autem quibusdam! Doloremque dolorem sapiente vero sequi nam aliquid illo officia, at quibusdam eum sunt omnis eos quod similique id veniam! Recusandae numquam magni cum voluptatum atque iusto neque necessitatibus totam voluptate. Laboriosam, placeat."
            ],
            [ 
                "title" => "VueJS",
                "slug" => "vuejs",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, aperiam! Unde, id culpa ex suscipit ipsa autem quibusdam! Doloremque dolorem sapiente vero sequi nam aliquid illo officia, at quibusdam eum sunt omnis eos quod similique id veniam! Recusandae numquam magni cum voluptatum atque iusto neque necessitatibus totam voluptate. Laboriosam, placeat."
            ],

           ]
    ] );
});

Route::get("/about", function () {
    return view( "about  ", [
        "title" => "About",
       
    ] );
});

Route::get("/tech/{slug}", function ($slug) {

    $technologies = [
            [ 
                "title" => "Laravel",
                "slug" => "laravel",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, aperiam! Unde, id culpa ex suscipit ipsa autem quibusdam! Doloremque dolorem sapiente vero sequi nam aliquid illo officia, at quibusdam eum sunt omnis eos quod similique id veniam! Recusandae numquam magni cum voluptatum atque iusto neque necessitatibus totam voluptate. Laboriosam, placeat."
            ],
            [ 
                "title" => "ReactJS",
                "slug" => "reactjs",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, aperiam! Unde, id culpa ex suscipit ipsa autem quibusdam! Doloremque dolorem sapiente vero sequi nam aliquid illo officia, at quibusdam eum sunt omnis eos quod similique id veniam! Recusandae numquam magni cum voluptatum atque iusto neque necessitatibus totam voluptate. Laboriosam, placeat."
            ],
            [ 
                "title" => "VueJS",
                "slug" => "vuejs",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, aperiam! Unde, id culpa ex suscipit ipsa autem quibusdam! Doloremque dolorem sapiente vero sequi nam aliquid illo officia, at quibusdam eum sunt omnis eos quod similique id veniam! Recusandae numquam magni cum voluptatum atque iusto neque necessitatibus totam voluptate. Laboriosam, placeat."
            ],

        ];

        $selectedItem = [];
        foreach ($technologies as $item) {
            if ($item["slug"] === $slug) {
               $selectedItem =  $item; 
                
            }
        }


    return view( "tech",[
        "title" => $selectedItem["title"],
        "description" => $selectedItem["description"],
        "item" => $selectedItem
    ]);
});