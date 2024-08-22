<?php

namespace App\Repositories\client\first_page;

use App\Models\Product;
use Carbon\Carbon;


class ClientFirstPageRepository implements ClientFirstPageRepositoryInterface
{
    public function getFeaturedProducts()
    {
        $userVisitDate = Carbon::now();
        $featuredProducts = Product::query()->whereNotNull('discount_duration')
            ->where('discount_duration', '>', $userVisitDate)
            ->where('featured', true)
            ->with('coverImage', 'seo')
            ->get();

        return $featuredProducts->map(function ($product) {
            // اگر تخفیف درصدی است و مقدار discount موجود باشد
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
            return $product;
        });

    }

}
