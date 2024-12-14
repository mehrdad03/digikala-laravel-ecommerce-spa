<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Client\Auth\Index as authIndex;
use App\Livewire\Client\Home\Index as homeIndex;
use App\Livewire\Client\Product\Index as productIndex;
use App\Livewire\Client\Cart\Index as cartIndex;
use App\Livewire\Client\Shipping\Index as shippingIndex;
use App\Livewire\Client\Payment\Callback;

Route::name('client.')->group(function () {

    Route::get('/', homeIndex::class)->name('home');
    Route::get('/product/{p_code}/{slug?}', productIndex::class)->name('product');

    Route::middleware('guest')->group(function () {
        Route::get('/auth', authIndex::class)->name('auth.index');
        Route::get('/gmail', [authIndex::class, 'redirectToProvider'])->name('gmail');
        Route::get('/auth/gmail/callback', [authIndex::class, 'handleProviderCallback'])->name('gmail.callback');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/logout', [authIndex::class, 'clientLogout'])->name('logout');
        Route::get('/checkout/cart', cartIndex::class)->name('cart');
        Route::get('/checkout/shipping', shippingIndex::class)->name('shipping');
        Route::get('/payment/callback', Callback::class)->name('payment.callback');
    });
});





