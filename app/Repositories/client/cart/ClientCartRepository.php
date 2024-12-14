<?php

namespace App\Repositories\client\cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ClientCartRepository implements ClientCartRepositoryInterface
{
    public function updateCartQuantity($itemId, $action)
    {
        $cartItem = Cart::query()->where('id', $itemId)
            ->with('product:id,stock')
            ->first();

        if (!$cartItem) {
            return "آیتم مورد نظر در سبد خرید یافت نشد.";
        }

        if ($action === 'increment') {
            if ($cartItem->quantity < $cartItem->product->stock) {
                $cartItem->increment('quantity', 1);
            } else {
                return true;
            }

        } elseif ($action === 'decrement') {

            $cartItem->decrement('quantity', 1);
            if ($cartItem->quantity < 1) {
                $cartItem->delete();
            }
            return false;
        }

    }

    public function getCartItemsWithCalculations()
    {

        $cartItems = Cart::query()
            ->where('user_id', Auth::id())
            ->with('product:id,name,price,seller_id,discount,stock,p_code,featured')
            ->get()
            ->map(function ($item) {
                $product = $item->product;
                // قیمت اصلی هر محصول
                $originalPrice = $product->price * $item->quantity;
                // محاسبه میزان تخفیف
                $discountAmount = $product->discount ? ($product->price * $product->discount / 100) * $item->quantity : 0;
                // قیمت نهایی پس از تخفیف
                $discountedPrice = $originalPrice - $discountAmount;

                $item->originalPrice = $originalPrice;
                $item->discountAmount = $discountAmount;
                $item->discountedPrice = $discountedPrice;
                return $item;
            });


        $invoice = [
            'totalProductCount' => $cartItems->count(),
            'totalOriginalPrice' => $cartItems->sum('originalPrice'),
            'totalDiscount' => $cartItems->sum('discountAmount'),
            'totalDiscountedPrice' => $cartItems->sum('discountedPrice'),
        ];
        //For using in the shipping
        Session::put('invoiceFromCart', $invoice);

        return compact('cartItems', 'invoice');

    }

}
