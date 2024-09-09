<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CacheTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cache')->delete();
        
        \DB::table('cache')->insert(array (
            0 => 
            array (
                'key' => '77de68daecd823babbb58edb1c8e14d7106e83bb',
                'value' => 'i:1;',
                'expiration' => 1725702697,
            ),
            1 => 
            array (
                'key' => '77de68daecd823babbb58edb1c8e14d7106e83bb:timer',
                'value' => 'i:1725702697;',
                'expiration' => 1725702697,
            ),
            2 => 
            array (
                'key' => '8277bae22d70a1e7a58043d5932857a9f92cc444',
                'value' => 'i:1;',
                'expiration' => 1725777665,
            ),
            3 => 
            array (
                'key' => '8277bae22d70a1e7a58043d5932857a9f92cc444:timer',
                'value' => 'i:1725777665;',
                'expiration' => 1725777665,
            ),
            4 => 
            array (
                'key' => 'da4b9237bacccdf19c0760cab7aec4a8359010b0',
                'value' => 'i:1;',
                'expiration' => 1725769926,
            ),
            5 => 
            array (
                'key' => 'da4b9237bacccdf19c0760cab7aec4a8359010b0:timer',
                'value' => 'i:1725769926;',
                'expiration' => 1725769926,
            ),
            6 => 
            array (
                'key' => 'spatie.permission.cache',
                'value' => 'a:3:{s:5:"alias";a:0:{}s:11:"permissions";a:0:{}s:5:"roles";a:0:{}}',
                'expiration' => 1725786735,
            ),
        ));
        
        
    }
}