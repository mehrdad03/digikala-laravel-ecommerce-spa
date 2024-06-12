<?php

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
use Illuminate\Support\Facades\Route;



Route::get('/admin/dashboard',dashboardIndex::class)->name('admin.dashboard.index');
Route::get('/admin/country',countryIndex::class)->name('admin.country.index');
