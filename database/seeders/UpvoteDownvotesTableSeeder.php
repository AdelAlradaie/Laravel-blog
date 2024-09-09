<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpvoteDownvotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('upvote_downvotes')->delete();
        
        \DB::table('upvote_downvotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_upvote' => 1,
                'post_id' => 6,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:20:42',
                'updated_at' => '2024-09-07 09:20:42',
            ),
            1 => 
            array (
                'id' => 2,
                'is_upvote' => 1,
                'post_id' => 7,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:23:24',
                'updated_at' => '2024-09-07 09:23:24',
            ),
            2 => 
            array (
                'id' => 3,
                'is_upvote' => 1,
                'post_id' => 8,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:31:48',
                'updated_at' => '2024-09-07 09:31:48',
            ),
            3 => 
            array (
                'id' => 4,
                'is_upvote' => 1,
                'post_id' => 9,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:33:56',
                'updated_at' => '2024-09-07 09:33:56',
            ),
            4 => 
            array (
                'id' => 5,
                'is_upvote' => 1,
                'post_id' => 10,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:36:29',
                'updated_at' => '2024-09-07 09:36:29',
            ),
            5 => 
            array (
                'id' => 6,
                'is_upvote' => 1,
                'post_id' => 12,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:50:59',
                'updated_at' => '2024-09-07 09:50:59',
            ),
            6 => 
            array (
                'id' => 7,
                'is_upvote' => 1,
                'post_id' => 11,
                'user_id' => 3,
                'created_at' => '2024-09-08 04:05:20',
                'updated_at' => '2024-09-08 04:05:20',
            ),
            7 => 
            array (
                'id' => 8,
                'is_upvote' => 1,
                'post_id' => 8,
                'user_id' => 4,
                'created_at' => '2024-09-08 04:25:34',
                'updated_at' => '2024-09-08 04:25:34',
            ),
            8 => 
            array (
                'id' => 9,
                'is_upvote' => 1,
                'post_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-09-08 04:31:25',
                'updated_at' => '2024-09-08 04:31:25',
            ),
            9 => 
            array (
                'id' => 10,
                'is_upvote' => 1,
                'post_id' => 7,
                'user_id' => 2,
                'created_at' => '2024-09-08 04:31:53',
                'updated_at' => '2024-09-08 04:31:53',
            ),
            10 => 
            array (
                'id' => 11,
                'is_upvote' => 1,
                'post_id' => 10,
                'user_id' => 4,
                'created_at' => '2024-09-08 04:32:39',
                'updated_at' => '2024-09-08 04:32:39',
            ),
            11 => 
            array (
                'id' => 12,
                'is_upvote' => 1,
                'post_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-09-08 06:35:29',
                'updated_at' => '2024-09-08 06:35:29',
            ),
        ));
        
        
    }
}