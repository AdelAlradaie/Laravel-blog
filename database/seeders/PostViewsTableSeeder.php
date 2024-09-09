<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostViewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_views')->delete();
        
        \DB::table('post_views')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 4,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:14:35',
                'updated_at' => '2024-09-07 09:14:35',
            ),
            1 => 
            array (
                'id' => 2,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 5,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:16:24',
                'updated_at' => '2024-09-07 09:16:24',
            ),
            2 => 
            array (
                'id' => 3,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 6,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:20:39',
                'updated_at' => '2024-09-07 09:20:39',
            ),
            3 => 
            array (
                'id' => 4,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 7,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:23:18',
                'updated_at' => '2024-09-07 09:23:18',
            ),
            4 => 
            array (
                'id' => 5,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 8,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:28:04',
                'updated_at' => '2024-09-07 09:28:04',
            ),
            5 => 
            array (
                'id' => 6,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 9,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:33:51',
                'updated_at' => '2024-09-07 09:33:51',
            ),
            6 => 
            array (
                'id' => 7,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 10,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:36:19',
                'updated_at' => '2024-09-07 09:36:19',
            ),
            7 => 
            array (
                'id' => 8,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 11,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:39:10',
                'updated_at' => '2024-09-07 09:39:10',
            ),
            8 => 
            array (
                'id' => 9,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'H6NMqVheabURqK6uprotUXlStZ83S3Z92mXgbRVbpqMqORNsyZ',
                'post_id' => 12,
                'user_id' => 3,
                'created_at' => '2024-09-07 09:50:54',
                'updated_at' => '2024-09-07 09:50:54',
            ),
            9 => 
            array (
                'id' => 10,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 9,
                'user_id' => NULL,
                'created_at' => '2024-09-08 02:54:21',
                'updated_at' => '2024-09-08 02:54:21',
            ),
            10 => 
            array (
                'id' => 11,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Linux; Android 13; Pixel 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 8,
                'user_id' => NULL,
                'created_at' => '2024-09-08 02:59:23',
                'updated_at' => '2024-09-08 02:59:23',
            ),
            11 => 
            array (
                'id' => 12,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 12,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:06:38',
                'updated_at' => '2024-09-08 03:06:38',
            ),
            12 => 
            array (
                'id' => 13,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 11,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:06:55',
                'updated_at' => '2024-09-08 03:06:55',
            ),
            13 => 
            array (
                'id' => 14,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 10,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:10:34',
                'updated_at' => '2024-09-08 03:10:34',
            ),
            14 => 
            array (
                'id' => 15,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 5,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:14:10',
                'updated_at' => '2024-09-08 03:14:10',
            ),
            15 => 
            array (
                'id' => 16,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1 Edg/128.0.0.0',
                'token' => 'w9jSP6Gq7s0dGAYHPmKYlwHjfpSt63y9GfwFAdhNBTXtbcFQEu',
                'post_id' => 7,
                'user_id' => 3,
                'created_at' => '2024-09-08 03:45:57',
                'updated_at' => '2024-09-08 03:45:57',
            ),
            16 => 
            array (
                'id' => 17,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'QBndp4CrYx39N9mVgx4hkIBdRqHTLOa2s5wuBU3zP6EbMptaN6',
                'post_id' => 8,
                'user_id' => NULL,
                'created_at' => '2024-09-08 06:32:12',
                'updated_at' => '2024-09-08 06:32:12',
            ),
            17 => 
            array (
                'id' => 18,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'QBndp4CrYx39N9mVgx4hkIBdRqHTLOa2s5wuBU3zP6EbMptaN6',
                'post_id' => 6,
                'user_id' => NULL,
                'created_at' => '2024-09-08 06:33:02',
                'updated_at' => '2024-09-08 06:33:02',
            ),
            18 => 
            array (
                'id' => 19,
                'ip_address' => '172.20.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 Edg/128.0.0.0',
                'token' => 'QBndp4CrYx39N9mVgx4hkIBdRqHTLOa2s5wuBU3zP6EbMptaN6',
                'post_id' => 9,
                'user_id' => NULL,
                'created_at' => '2024-09-08 06:34:42',
                'updated_at' => '2024-09-08 06:34:42',
            ),
        ));
        
        
    }
}