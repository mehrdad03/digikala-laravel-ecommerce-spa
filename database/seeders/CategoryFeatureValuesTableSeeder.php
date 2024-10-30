<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeatureValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_feature_values')->delete();
        
        \DB::table('category_feature_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_feature_id' => 1,
                'value' => 'سیستم عامل iOS',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:49',
                'updated_at' => '2024-10-12 15:35:49',
            ),
            1 => 
            array (
                'id' => 2,
                'category_feature_id' => 2,
                'value' => 'پرچم‌دار',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:35:55',
                'updated_at' => '2024-10-12 15:35:55',
            ),
            2 => 
            array (
                'id' => 3,
                'category_feature_id' => 3,
                'value' => 'Galaxy S24',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:36:01',
                'updated_at' => '2024-10-12 15:36:33',
            ),
            3 => 
            array (
                'id' => 4,
                'category_feature_id' => 4,
                'value' => '۱۴ سپتامبر ۲۰۲۱',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:36:45',
                'updated_at' => '2024-10-12 15:36:45',
            ),
            4 => 
            array (
                'id' => 5,
                'category_feature_id' => 5,
                'value' => '۱۴۶.۷x۷۱.۵x۷.۶۵ میلی‌متر',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:36:52',
                'updated_at' => '2024-10-12 15:36:52',
            ),
            5 => 
            array (
                'id' => 6,
                'category_feature_id' => 6,
                'value' => '۱۷۴ گرم',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:37:01',
                'updated_at' => '2024-10-12 15:37:01',
            ),
            6 => 
            array (
                'id' => 7,
                'category_feature_id' => 8,
                'value' => 'دو عدد',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:37:27',
                'updated_at' => '2024-10-12 15:37:27',
            ),
            7 => 
            array (
                'id' => 8,
                'category_feature_id' => 9,
            'value' => 'سایز نانو (۸.۸ × ۱۲.۳ میلی‌متر)',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:37:35',
                'updated_at' => '2024-10-12 15:37:35',
            ),
            8 => 
            array (
                'id' => 9,
                'category_feature_id' => 10,
            'value' => 'Apple A۱۵ Bionic (۵ nm) Chipset',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:37:46',
                'updated_at' => '2024-10-12 15:37:46',
            ),
            9 => 
            array (
                'id' => 10,
                'category_feature_id' => 11,
                'value' => '۲x GHz Avalanche + ۴x GHz Blizzard',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:37:54',
                'updated_at' => '2024-10-12 15:37:54',
            ),
            10 => 
            array (
                'id' => 11,
                'category_feature_id' => 12,
                'value' => '۳.۳۲ - ۱.۸۲ گیگاهرتز',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 15:38:06',
                'updated_at' => '2024-10-12 15:38:06',
            ),
            11 => 
            array (
                'id' => 12,
                'category_feature_id' => 1,
                'value' => 'سیستم عامل Android',
                'deleted_at' => NULL,
                'created_at' => '2024-10-12 16:50:21',
                'updated_at' => '2024-10-12 16:50:21',
            ),
        ));
        
        
    }
}