<?php

use App\Livewire\Admin\Category\Features;
use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
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
