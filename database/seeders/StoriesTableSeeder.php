<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stories')->delete();
        
        \DB::table('stories')->insert(array (
            0 => 
            array (
                'id' => 9,
                'title' => 'تست',
                'thumbnail' => 'QCNi3dmDAM8soLYc96n9q7vAni13EAHcOf3drWE2.jpg',
                'story' => 'OuhksJiiEP2UD1rifUlOLAnyEysaqLsRxbV4mFFF.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 13:47:51',
                'updated_at' => '2024-08-12 13:47:51',
            ),
            1 => 
            array (
                'id' => 11,
                'title' => 'تست2',
                'thumbnail' => '8tltNJtXSf9ZLKEgkqcb5C54sNSDdsHLXpvf89Qu.jpg',
                'story' => 'g5N8Ir8lGcqhbiCNvKSoAGBhHYxwPh1L2kPLaEmH.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:34:38',
                'updated_at' => '2024-08-12 14:34:38',
            ),
            2 => 
            array (
                'id' => 12,
                'title' => 'تست3',
                'thumbnail' => 'cYcKuqiHUd7W9652GE89ukLFvWizDiHjH5J0g8ml.jpg',
                'story' => 'bAdnVF898CgAkCamSRWtIx2egYkUzEdf2FQ0ZwKH.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:35:01',
                'updated_at' => '2024-08-12 14:35:01',
            ),
            3 => 
            array (
                'id' => 13,
                'title' => 'تست4',
                'thumbnail' => 'lMLoZfUdKgU49RujdyoUmqlkKoBtKzWJBjX9JWNV.jpg',
                'story' => 'iqvFR3tZRqj8OZBp9kCBBhrAeTU6em7KsFaKR0EC.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:42:22',
                'updated_at' => '2024-08-12 14:42:22',
            ),
            4 => 
            array (
                'id' => 14,
                'title' => 'تست5',
                'thumbnail' => 'VAMaezC2nx2wwFzaALCzAqtRoaiHBKhiWX3vDCQl.jpg',
                'story' => '9sR03ZzYAxnOGuo3zisUrL8nbwsUPG02diU8CDD4.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:42:46',
                'updated_at' => '2024-08-12 14:42:46',
            ),
            5 => 
            array (
                'id' => 15,
                'title' => 'تست6',
                'thumbnail' => 'cpZ2G8fua04qmwBQcGNPyXkYBa0nFrVztrsbhsi8.jpg',
                'story' => 'Gvi8gFwwP8ocv7jQ5FamdyrJDqz79sKcXL1cZRxe.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:43:03',
                'updated_at' => '2024-08-12 14:43:03',
            ),
            6 => 
            array (
                'id' => 16,
                'title' => 'تست7',
                'thumbnail' => '4dSbj2aZCObRTLxg3tcJ9dP4UiNNxSXxBqshMYxF.jpg',
                'story' => 'ZzUEqAoL0YIuvL6qqAFhgEQa7Gkqps7fylD0l2nO.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:49:14',
                'updated_at' => '2024-08-12 14:49:14',
            ),
            7 => 
            array (
                'id' => 17,
                'title' => 'تست8',
                'thumbnail' => 'DTSNIAHc3ISSlnfakIiEkhdWfQIxEbbiZUkuSQMh.jpg',
                'story' => 'P77erIaa2ow5oNc7CPznMra0wRkCIAbSeq7esXO2.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:49:29',
                'updated_at' => '2024-08-12 14:49:29',
            ),
            8 => 
            array (
                'id' => 18,
                'title' => 'تست9',
                'thumbnail' => 'pj85W5DXt5GvvkWa2fHLatiGUJwkIP4gtNGtErni.jpg',
                'story' => 'WAqNbMTZJEYSgixXkt7bJ8ksdp0bjFGA8QHgB5pY.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 14:49:45',
                'updated_at' => '2024-08-12 14:49:45',
            ),
            9 => 
            array (
                'id' => 20,
                'title' => 'تست 10',
                'thumbnail' => 'ZJtsDv8VLC7e0G9OJWSm3bS6JwWJpD3OsGOrdHrG.jpg',
                'story' => 'RBc7kRz9Av7Qzdk8JXaxrKEGIpmtDlDIyyZzZQko.mp4',
                'admin_id' => NULL,
                'status' => 0,
                'created_at' => '2024-08-12 16:52:29',
                'updated_at' => '2024-08-12 16:52:29',
            ),
        ));
        
        
    }
}