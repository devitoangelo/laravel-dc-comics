<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics.comics');
        
        foreach ($products as $product) {

            $comic = new Comic();
            $comic->title = $product['title'];
            $comic->thumb = $product['thumb'];
            $comic->description = $product['description'];
            $comic->price = $product['price'];
            $comic->series = $product['series'];
            $comic->sale_date = $product['sale_date'];
            $comic->type = $product['type'];
            $comic->save();

          
        }
    }
}
