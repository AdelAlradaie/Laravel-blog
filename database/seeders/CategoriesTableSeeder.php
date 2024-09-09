<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'web Development ',
                'slug' => 'web-development',
                'created_at' => '2024-09-07 09:18:18',
                'updated_at' => '2024-09-07 09:18:25',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Programming',
                'slug' => 'programming',
                'created_at' => '2024-09-07 09:19:07',
                'updated_at' => '2024-09-07 09:19:07',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'React',
                'slug' => 'react',
                'created_at' => '2024-09-07 09:19:18',
                'updated_at' => '2024-09-07 09:19:18',
            ),
        ));
        
        
    }
}