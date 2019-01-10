<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $products = [];

        for($i = 0; $i < 100; $i++) {
        	$item = [
        		'name' => $faker->name,
        		'image' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
        		'category_id' => rand(1, 7),
        		'hot_product' => rand(0, 1),
        		'price' => rand(1000, 99999),
        		'desc' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        		'product_detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        	];

        	array_push($products, $item);
        }

        DB::table('products')->insert($products);
    }
}
