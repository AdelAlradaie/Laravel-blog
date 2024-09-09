<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_post')->delete();
        
        \DB::table('category_post')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'post_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'post_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'post_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 3,
                'post_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 3,
                'post_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'post_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 2,
                'post_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}