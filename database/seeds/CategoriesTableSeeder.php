<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	['name' => 'Laptop'],
        	['name' => 'Ipad'],
        	['name' => 'Phone'],
        	['name' => 'Headphone'],
        	['name' => 'Computer accessories'],
        	['name' => 'Old'],
        	['name' => 'Hot product'],
        ];

        DB::table('categories')->insert($categories);
    }
}
