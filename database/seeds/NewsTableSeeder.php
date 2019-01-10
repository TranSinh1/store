<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $news = [];

        for($i = 0; $i < 100; $i++) {
        	$item = [
        		'name' => $faker->name,
        		'image' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
        		'hot_new' => rand(0, 1),
        		'desc' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        		'new_detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        	];

        	array_push($news, $item);
        }

        DB::table('news')->insert($news);
    }
}
