<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Post fault'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Homecharge fault'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Polar issue'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Source London fault'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Source East fault'
        ]);

        DB::table('categories')->insert([
        	'name' => 'Midlands PIP fault'
        ]);

    }
}
