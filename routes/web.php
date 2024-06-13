<?php

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
use App\Livewire\Admin\State\Index as stateIndex;
use Illuminate\Support\Facades\Route;



Route::get('/admin/dashboard',dashboardIndex::class)->name('admin.dashboard.index');
Route::get('/admin/country',countryIndex::class)->name('admin.country.index');
Route::get('/admin/state',stateIndex::class)->name('admin.state.index');
