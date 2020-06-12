<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'user_id'=> '1',
            'name' => 'Test Category One',
            'slug' => 'test category one',
            'is_published'=> '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ],
        [
            'user_id'=> '1',
            'name' => 'Test Category Two',
            'slug' => 'test category two',
            'is_published'=> '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ],
        [
            'user_id'=> '1',
            'name' => 'Test Category Three',
            'slug' => 'test category three',
            'is_published'=> '1',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
