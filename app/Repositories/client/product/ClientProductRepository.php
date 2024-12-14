<?php

namespace App\Repositories\client\product;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductFeatureValue;
use App\Models\ProductReviews;
use App\Models\ProductReviewVote;
use Illuminate\Support\Facades\Auth;

class ClientProductRepository implements ClientProductRepositoryInterface
{
    public function getSingleProduct($p_code)
    {
        return Product::query()
            ->where('p_code', $p_code)
            ->select('id', 'name', 'price', 'discount', 'discount_duration', 'category_id', 'stock', 'seller_id', 'p_code', 'featured')
            ->with(['images', 'coverImage', 'seller', 'seo' => function ($query) {
                $query->where('type', 'product');
            }
            ])->firstOrFail();
    }

    public function checkProductInCart($productId)
    {
        return Cart::query()
            ->where([
                'product_id' => $productId,
                'user_id' => Auth::id(),
            ])->exists();
    }

    public function addToCart($productId)
    {
        Cart::query()->create([

            'product_id' => $productId,
            'user_id' => Auth::id(),
            'quantity' => 1,
        ]);
    }

    public function getProductFeatures($productId)
    {
        return ProductFeatureValue::query()->where('product_id', $productId)
            ->with(['categoryFeature', 'categoryFeatureValue'])
            ->get();

    }

    public function getProductReviews($productId)
    {
        return ProductReviews::query()
            ->where([
                'product_id' => $productId,
                'status' => 'approved',
            ])->with('user')
            ->withCount([
                'votes as likeCount' => function ($query) {
                    $query->where('status', 'like');
                },
                'votes as dislikeCount' => function ($query) {
                    $query->where('status', 'dislike');
                },
            ])
            ->get();
    }

    public function submitReview($formData, $productId, $positiveItems, $negativeItems)
    {
        return ProductReviews::query()->create([
            'title' => $formData['title'],
            'comment' => $formData['comment'],
            'positive' => implode(',', $positiveItems),
            'negative' => implode(',', $negativeItems),
            'product_id' => $productId,
            'user_id' => Auth::id(),
        ]);
    }

    public function setVote($status, $reviewId)
    {
        ProductReviewVote::query()->updateOrCreate(
            [
                'user_id' => Auth::id(),
                'product_reviews_id' => $reviewId,
            ],
            [
                'status' => $status
            ]
        );
    }

}
