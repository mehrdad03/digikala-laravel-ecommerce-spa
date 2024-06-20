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
                'name' => 'موبایل',
                'category_id' => NULL,
                'created_at' => '2024-06-20 09:32:46',
                'updated_at' => '2024-06-20 09:32:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'گوشی آیفون',
                'category_id' => 1,
                'created_at' => '2024-06-20 09:33:02',
                'updated_at' => '2024-06-20 09:33:02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'گوشی سامسونگ',
                'category_id' => 1,
                'created_at' => '2024-06-20 09:33:09',
                'updated_at' => '2024-06-20 09:33:09',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'گوشی شیاومی',
                'category_id' => 1,
                'created_at' => '2024-06-20 09:33:16',
                'updated_at' => '2024-06-20 09:33:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'کالای دیجیتال',
                'category_id' => NULL,
                'created_at' => '2024-06-20 09:33:32',
                'updated_at' => '2024-06-20 09:33:32',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'لپ تاپ',
                'category_id' => 5,
                'created_at' => '2024-06-20 09:33:49',
                'updated_at' => '2024-06-20 09:33:49',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'پرینتر',
                'category_id' => 5,
                'created_at' => '2024-06-20 09:33:55',
                'updated_at' => '2024-06-20 09:33:55',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'تبلت',
                'category_id' => 5,
                'created_at' => '2024-06-20 09:34:36',
                'updated_at' => '2024-06-20 09:34:36',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'هدفون',
                'category_id' => 5,
                'created_at' => '2024-06-20 09:34:40',
                'updated_at' => '2024-06-20 09:34:40',
            ),
        ));
        
        
    }
}