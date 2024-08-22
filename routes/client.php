<?php


use Illuminate\Support\Facades\Route;


use App\Livewire\Client\Auth\Index as authIndex;
use App\Livewire\Client\Home\Index as homeIndex;
use App\Livewire\Client\Product\Index as productIndex;

Route::name('client.')->group(function (){
    Route::get('/', homeIndex::class)->name('home');
    Route::get('/product/{p_code}/{slug?}', productIndex::class)->name('product');
    Route::get('/auth', authIndex::class)->name('auth.index');
    Route::get('/gmail', [authIndex::class,'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback', [authIndex::class,'handleProviderCallback'])->name('gmail.callback');
});





