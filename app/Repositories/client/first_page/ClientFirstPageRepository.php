<?php

namespace App\Repositories\client\first_page;

use App\Models\Product;
use Carbon\Carbon;


class ClientFirstPageRepository implements ClientFirstPageRepositoryInterface
{
    public function getFeaturedProducts()
    {
        // فرض کنید تاریخ ورود کاربر به وبسایت در این متغیر ذخیره شده است
        $userVisitDate = Carbon::now(); // یا هر تاریخ دیگری که شما دارید

// فیلتر کردن محصولات بر اساس شرط‌های داده شده
        $featuredProducts = Product::query()->whereNotNull('discount_duration') // discount_duration خالی نباشد
        ->where('discount_duration', '>', $userVisitDate) // تاریخ ورود کاربر قبل از discount_duration باشد
        ->where('featured', true)
            ->get();

        return $featuredProducts->map(function ($product) {
            // اگر تخفیف درصدی است و مقدار discount موجود باشد
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->final_price = $product->price - $discountAmount;
            return $product;
        });

    }

}
