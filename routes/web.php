<?php


use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function (){
    require __DIR__ . '/admin.php';
});

Route::prefix('client')->group(function () {
    require __DIR__ . '/client.php';
});

Route::prefix('seller')->group(function () {
    require __DIR__ . '/seller.php';
});


