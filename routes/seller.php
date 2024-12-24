<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Seller\Auth\Index as AuthIndex;

Route::name('seller.')->group(function () {


    Route::get('/auth', AuthIndex::class)->name('auth.login')->middleware('guest:admin');
    Route::get('/logout', [AuthIndex::class, 'logout'])->name('logout')->middleware('auth:admin');


});
