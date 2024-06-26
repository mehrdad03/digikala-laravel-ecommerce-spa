<?php

use App\Livewire\Admin\Category\Features;
use App\Livewire\Admin\Product\CkUpload;
use App\Livewire\Admin\Product\Content;
use App\Livewire\Admin\Product\Features as productFeatures;
use App\Livewire\Admin\Category\FeatureValue;
use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
use App\Livewire\Admin\Product\Create;
use App\Livewire\Admin\Product\Index as productIndex;
use App\Livewire\Admin\State\Index as stateIndex;
use App\Livewire\Admin\City\Index as cityIndex;
use App\Livewire\Admin\Category\Index as categoryIndex;
use Illuminate\Support\Facades\Route;


Route::get('/admin/dashboard', dashboardIndex::class)->name('admin.dashboard.index');
Route::get('/admin/country', countryIndex::class)->name('admin.country.index');
Route::get('/admin/state', stateIndex::class)->name('admin.state.index');
Route::get('/admin/city', cityIndex::class)->name('admin.city.index');
Route::get('/admin/category', categoryIndex::class)->name('admin.category.index');
Route::get('/admin/category/{category}/features', Features::class)->name('admin.category.features');
Route::get('/admin/category/features/{categoryFeature}/values', FeatureValue::class)->name('admin.category.features.values');
Route::get('/admin/product/index', productIndex::class)->name('admin.product.index');
Route::get('/admin/product/create', Create::class)->name('admin.product.create');
Route::get('/admin/product/feature/{product}', productFeatures::class)->name('admin.product.features');
Route::get('/admin/product/content/{product}', Content::class)->name('admin.product.content');


Route::post('/admin/ck-upload/{productId}', [CkUpload::class,'upload'])->name('admin.ck-upload');


