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
use App\Livewire\Admin\Delivery\Index as deliveryIndex;
use App\Livewire\Admin\Payment\Index as paymentIndex;
use App\Livewire\Admin\Story\Index as storyIndex;
use Illuminate\Support\Facades\Route;



Route::name('admin.')->group(function (){
    Route::get('/dashboard', dashboardIndex::class)->name('dashboard.index');
    Route::get('/country', countryIndex::class)->name('country.index');
    Route::get('/state', stateIndex::class)->name('state.index');
    Route::get('/city', cityIndex::class)->name('city.index');
    Route::get('/category', categoryIndex::class)->name('category.index');
    Route::get('/category/{category}/features', Features::class)->name('category.features');
    Route::get('/category/features/{categoryFeature}/values', FeatureValue::class)->name('category.features.values');
    Route::get('/product/index', productIndex::class)->name('product.index');
    Route::get('/product/create', Create::class)->name('product.create');
    Route::get('/product/feature/{product}', productFeatures::class)->name('product.features');
    Route::get('/product/content/{product}', Content::class)->name('product.content');
    Route::get('/delivery', deliveryIndex::class)->name('delivery.index');
    Route::get('/payment', paymentIndex::class)->name('payment.index');
    Route::get('/story', storyIndex::class)->name('story.index');

    Route::post('/ck-upload/{productId}', [CkUpload::class,'upload'])->name('ck-upload');

});



