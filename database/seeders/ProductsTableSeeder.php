<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'گوشی موبایل اپل مدل iPhone 13 CH دو سیم‌ کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت - نات اکتیو',
                'price' => 46699000,
                'discount' => 0,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'created_at' => '2024-06-20 09:38:36',
                'updated_at' => '2024-06-20 09:38:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'گوشی موبایل سامسونگ مدل Galaxy S24 Ultra دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت - ویتنام',
                'price' => 63900000,
                'discount' => 0,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 0,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 2,
                'created_at' => '2024-06-20 09:48:15',
                'updated_at' => '2024-06-20 09:48:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'لپ تاپ 13.4 اینچی ایسوس مدل ROG Flow Z13 GZ301ZE-i9 12900H 16GB 1SSD RTX3050Ti',
                'price' => 89500000,
                'discount' => 0,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 0,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 6,
                'created_at' => '2024-06-20 09:58:03',
                'updated_at' => '2024-06-20 09:58:03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'لپ تاپ 15.6 اینچی ایسوس مدل TUF Gaming F15 FX506HE-HN393W-i7 11800H 16GB 512SSD RTX3050TI W',
                'price' => 48289000,
                'discount' => 0,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 0,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 6,
                'created_at' => '2024-06-20 10:00:25',
                'updated_at' => '2024-06-20 10:00:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'هدفون بلوتوثی سونی مدل WF-1000XM5',
                'price' => 13900000,
                'discount' => 0,
                'short_description' => NULL,
                'long_description' => NULL,
                'stock' => 10,
                'featured' => 0,
                'discount_duration' => NULL,
                'seller_id' => NULL,
                'category_id' => 9,
                'created_at' => '2024-06-20 10:05:16',
                'updated_at' => '2024-06-20 10:05:16',
            ),
        ));
        
        
    }
}