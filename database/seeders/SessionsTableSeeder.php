<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'dzJtObm1TOcwNVrBJLdiPTheQGRR91xh2HmqH7J1',
                'user_id' => NULL,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDVOTDAyNjlkS0NvZlBjWXJBTlFHRGZ3MXFFZEN1aVlVdGtodEZSRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjEvYWRtaW4vbG9naW4iO319',
                'last_activity' => 1725777695,
            ),
        ));
        
        
    }
}