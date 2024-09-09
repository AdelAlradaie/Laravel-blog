<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 6,
                'comment' => 'best js framework',
                'post_id' => 10,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:55:55',
                'updated_at' => '2024-09-08 03:55:55',
                'parent_id' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'comment' => 'it is easy to use.',
                'post_id' => 10,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:57:06',
                'updated_at' => '2024-09-08 04:00:07',
                'parent_id' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'comment' => 'It looks like nonsense to me. Tests its only reason why you are not afraid to modify codebase. Withouts tests it is all "woodoo coding". No matter how confident you are about yours skills. Or - you never worked with serious projets.',
                'post_id' => 8,
                'user_id' => 3,
                'created_at' => '2024-09-08 04:20:40',
                'updated_at' => '2024-09-08 04:20:40',
                'parent_id' => NULL,
            ),
            3 => 
            array (
                'id' => 13,
                'comment' => 'For small scale, hobby projects, who cares? Maybe you can get away without TDD.
For banking and critical applications, you better do it right. Because one mistake can cost the business untold millions. Or the entire business itself.
The earlier you catch a bug, the better it is for your business. If it takes some extra time for you to write the tests, it\'s time well spent, because it\'s not a bug that appeared in production.
TDD \'might\' appear as a waste of time to some, but it\'s actually a long term investment. You don\'t see it\'s benefits right away, but if you don\'t do it, you will CERTAINLY wish you\'ve done it.',
                'post_id' => 8,
                'user_id' => 4,
                'created_at' => '2024-09-08 04:25:38',
                'updated_at' => '2024-09-08 04:25:38',
                'parent_id' => NULL,
            ),
            4 => 
            array (
                'id' => 14,
                'comment' => 'That sounds like a benefit to testing in general, not to TDD specifically.',
                'post_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-09-08 04:27:13',
                'updated_at' => '2024-09-08 04:27:13',
                'parent_id' => 13,
            ),
            5 => 
            array (
                'id' => 15,
            'comment' => 'I like Test-Driven Development (TDD). Once you get used to it, it forces developers to think about architecture and separation of concerns. We mostly test critical parts of the applications or business and life-threatening components. Sometimes we write tests before the logic, and other times after, when we need to be confident in our implementation.

It\'s possible for us to run tests against mocks or real infrastructure in an automated way, and we usually have small and isolated tests that require very low maintenance.

I really can\'t imagine working without it now. We use strictly typed languages and aim for about 80% code coverage. You don\'t have to follow textbook examples and methods; you can create your own. Implementing our own flavor allows us to write complex programs with large teams and provides long-term support and maintenance. The great benefit is reducing stress for onboarding members who are not familiar with the codebase, enabling them to move forward faster.

I guess it really depends on the type of projects you do, their size, SLAs, etc. In my practice, I don\'t feel it hinders productivity.',
                'post_id' => 8,
                'user_id' => 2,
                'created_at' => '2024-09-08 04:28:06',
                'updated_at' => '2024-09-08 04:28:06',
                'parent_id' => NULL,
            ),
            6 => 
            array (
                'id' => 16,
                'comment' => 'thank you sir',
                'post_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-09-08 04:32:10',
                'updated_at' => '2024-09-08 04:32:10',
                'parent_id' => NULL,
            ),
            7 => 
            array (
                'id' => 17,
                'comment' => ' grate framework i love it',
                'post_id' => 10,
                'user_id' => 4,
                'created_at' => '2024-09-08 04:33:02',
                'updated_at' => '2024-09-08 04:33:02',
                'parent_id' => NULL,
            ),
            8 => 
            array (
                'id' => 18,
                'comment' => 'yes',
                'post_id' => 10,
                'user_id' => 4,
                'created_at' => '2024-09-08 04:33:09',
                'updated_at' => '2024-09-08 04:33:09',
                'parent_id' => 7,
            ),
            9 => 
            array (
                'id' => 19,
                'comment' => 'good info',
                'post_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-09-08 06:35:25',
                'updated_at' => '2024-09-08 06:35:25',
                'parent_id' => NULL,
            ),
            10 => 
            array (
                'id' => 20,
                'comment' => 'yes',
                'post_id' => 9,
                'user_id' => 2,
                'created_at' => '2024-09-08 06:35:34',
                'updated_at' => '2024-09-08 06:35:34',
                'parent_id' => 19,
            ),
        ));
        
        
    }
}