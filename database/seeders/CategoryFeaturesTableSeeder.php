<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_features')->delete();
        
        \DB::table('category_features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'نوع گوشی موبایل',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:09',
                'updated_at' => '2024-10-12 15:35:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'دسته ‌بندی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:13',
                'updated_at' => '2024-10-12 15:35:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'مدل',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:15',
                'updated_at' => '2024-10-12 15:35:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'زمان معرفی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:19',
                'updated_at' => '2024-10-12 15:35:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ابعاد',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:21',
                'updated_at' => '2024-10-12 15:35:21',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'وزن',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:24',
                'updated_at' => '2024-10-12 15:35:24',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'توضیحات بدنه',
                'category_id' => 1,
                'deleted_at' => '2024-10-12 15:37:17',
                'created_at' => '2024-10-12 15:35:27',
                'updated_at' => '2024-10-12 15:37:17',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'تعداد سیم کارت',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:29',
                'updated_at' => '2024-10-12 15:35:29',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'نوع سیم کارت',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:32',
                'updated_at' => '2024-10-12 15:35:32',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'تراشه',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:35',
                'updated_at' => '2024-10-12 15:35:35',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'پردازنده‌',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:39',
                'updated_at' => '2024-10-12 15:35:39',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'فرکانس پردازنده‌ مرکزی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:42',
                'updated_at' => '2024-10-12 15:35:42',
            ),
        ));
        
        
    }
}