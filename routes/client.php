<?php


use Illuminate\Support\Facades\Route;


use App\Livewire\Client\Auth\Index as authIndex;

Route::name('client.')->group(function (){
    Route::get('/', authIndex::class)->name('home');
    Route::get('/auth', authIndex::class)->name('auth.index');
    Route::get('/gmail', [authIndex::class,'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback', [authIndex::class,'handleProviderCallback'])->name('gmail.callback');
});
