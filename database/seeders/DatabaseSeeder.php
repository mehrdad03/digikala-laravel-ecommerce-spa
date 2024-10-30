<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SeoItemsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(StoriesTableSeeder::class);
        $this->call(CategoryFeaturesTableSeeder::class);
        $this->call(CategoryFeatureValuesTableSeeder::class);
        $this->call(ProductFeatureValuesTableSeeder::class);
    }
}
