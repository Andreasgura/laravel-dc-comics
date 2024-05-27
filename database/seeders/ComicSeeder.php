<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config("db.comics");
        // dd($products);
        foreach ($products as $product) {
            $newComic = new Comic();
            $newComic->thumb = $product['thumb'];
            $newComic->price = $product['price'];
            $newComic->series = $product['series'];
            $newComic->type = $product['type'];
            $newComic->save();
        }
    }
}
