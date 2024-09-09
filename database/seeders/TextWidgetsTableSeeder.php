<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TextWidgetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('text_widgets')->delete();
        
        \DB::table('text_widgets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'about-us-sidebar',
                'image' => NULL,
                'title' => 'About us',
                'content' => '<p>Iam Full Stack Developer</p>',
                'active' => 1,
                'created_at' => '2024-09-07 09:14:00',
                'updated_at' => '2024-09-07 09:16:59',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'about-page',
                'image' => '01J75W94748FN4MAV08SB0P9JM.jpg',
                'title' => 'About us',
                'content' => '<p>I\'m Full Stack Developer with over 2 years of experience in software engineering and developing new features and apps for different products and clients by using programming tools like Reactjs, React-Native, Laravel, Node.js ..etc . Capable of analyzing customer feedback in order to find the best way to create new and enhance the existing product features and performing quality assurance.</p>',
                'active' => 1,
                'created_at' => '2024-09-07 09:15:09',
                'updated_at' => '2024-09-07 09:15:42',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'header',
                'image' => NULL,
                'title' => 'welcome to my Blog website',
                'content' => NULL,
                'active' => 1,
                'created_at' => '2024-09-07 09:16:10',
                'updated_at' => '2024-09-07 09:16:10',
            ),
        ));
        
        
    }
}