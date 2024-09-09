<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'ali',
                'email' => 'ali@gmail.com',
                'email_verified_at' => '2024-09-08 04:31:06',
                'password' => '$2y$12$ZMNrCcib9SSr7X/MbvomGO5pp3ew./sx6d6/vDOLj9g2suzSuWpPS',
                'remember_token' => NULL,
                'created_at' => '2024-09-07 09:11:27',
                'updated_at' => '2024-09-08 04:31:06',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'adel alradaie',
                'email' => 'adel@gmail.com',
                'email_verified_at' => '2024-09-07 09:11:42',
                'password' => '$2y$12$rX0Dkr.YLPi.D9skiDM9Ku.RV39ZXyQn9PduU3wsH6SHn7V3Fq7vC',
                'remember_token' => 'e1Z0GDZL57npbsOZz3OuVCdOKziUmMi5H51zbI70BsTIDqbLW8Bgu5TpLKgr',
                'created_at' => '2024-09-07 09:11:42',
                'updated_at' => '2024-09-07 09:11:42',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'saleh hussein',
                'email' => 'saleh@gmail.com',
                'email_verified_at' => '2024-09-08 04:24:12',
                'password' => '$2y$12$Hnez9XJnkTkx3FSZWq3ckOjJHh3j/qJB95WeQdsvgznRSjXujPhtK',
                'remember_token' => NULL,
                'created_at' => '2024-09-08 04:24:12',
                'updated_at' => '2024-09-08 04:24:12',
            ),
        ));
        
        
    }
}