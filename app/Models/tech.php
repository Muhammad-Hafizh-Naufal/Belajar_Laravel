<?php

// ini adalah file berisikan data teknologi
namespace App\Models;


class tech
{
   private static  $technologies = [
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

    // fungsi untuk mengambil semua data
    public static function all()
    {
        return self::$technologies; // mengembalikan semua data
    }

    // fungsi untuk mengambil data berdasarkan slug
    public static function find($slug)
    {

        // cara pertama manual

        // // mengambil semua data dari technologies
        // $technologies = self::$technologies;
        //  $tech = []; // varibael untun menampung data

        // // mengambil data dari technologies         
        // foreach ($technologies as $technology) {

        //     // jika slug sesuai dengan slug yang diberikan
        //     if ($technology["slug"] === $slug) {

        //         // memasukan data kepada variabel tech
        //        $tech =  $technology; 
                
        //     }
        // }

        // cara kedua menguanakan fungsi bawan laravel 

        $technologies = collect(self::$technologies); // memasukan data ke dalam collection 

        // mengembalikan data
        return $technologies->firstWhere("slug", $slug); // menguanakan fungsi firstWhere
    }
}
