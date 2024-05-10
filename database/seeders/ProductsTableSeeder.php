<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $csv = Reader::createFromPath(database_path('seeds/products.csv'), 'r');
        $csv->setHeaderOffset(0); 
        foreach ($csv as $record) {
            $price = str_replace(['$', ','], '', $record['price']);
            $rating = $record['rating'] === '' ? 0 : $record['rating'];
            $reviews = $record['reviews'] === '' ? 0 : $record['reviews'];

            DB::table('products')->insert([
                'name' => $record['name'],
                'category' => $record['category'],
                'price' => $price,
                'rating' => $rating,
                'reviews' => $reviews,
                'badge' => $record['badge'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
