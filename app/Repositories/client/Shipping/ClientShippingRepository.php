<?php

namespace App\Repositories\client\Shipping;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientShippingRepository implements ClientShippingRepositoryInterface
{
    public function checkQuantity($cartItems)
    {
        foreach ($cartItems as $item) {

            $product = Product::query()->where('id', $item->id)->first();

            if ($product->stock < $item->quantity) {
                return back()->withErrors(['error' => "موجودی محصول {$product->name} کافی نیست."]);

            }
        }

    }

    public function createOrder($orderNumber, $paymentMethodId, $totalAmount, $deliveryMethodId, $addressId)
    {

        return Order::query()->create([
            'amount' => $totalAmount,
            'order_number' => $orderNumber,
            'user_id' => Auth::id(),
            'payment_method_id' => $paymentMethodId,
            'delivery_method_id' => $deliveryMethodId,
            'address_id' => $addressId,
        ]);

    }

    public function createOrderItems($cartItems, $orderId)
    {
        foreach ($cartItems as $item) {
            $product = Product::query()->where('id', $item->product_id)->first();
            OrderItem::query()->create([
                'quantity' => $item->quantity,
                'price' => $product->price,
                'order_id' => $orderId,
                'product_id' => $item->product_id,
            ]);
        }
    }

    public function createPayment($orderId, $orderNumber, $totalAmount)
    {
        Payment::query()->create([
            'order_id' => $orderId,
            'user_id' => Auth::id(),
            'amount' => $totalAmount,
            'order_number' => $orderNumber,
        ]);
    }

    public function submitOrderBeforePayment($cartItems, $paymentMethodId, $orderNumber,$totalAmount,$deliveryMethodId,$addressId): void
    {
        //check cart items quantity
        $this->checkQuantity($cartItems);

        DB::transaction(function () use ($cartItems, $paymentMethodId, $orderNumber,$totalAmount,$deliveryMethodId,$addressId) {
            //insert to orders table
            $order = $this->createOrder($orderNumber, $paymentMethodId,$totalAmount,$deliveryMethodId,$addressId);
            //insert to orderItems table
            $this->createOrderItems($cartItems, $order->id);
            //insert to payments table
            $this->createPayment($order->id, $orderNumber,$totalAmount);

        });

    }

    public function submitOrder($paymentGateWay, $totalAmount,$deliveryMethodId,$addressId)
    {
        $cartItems = Cart::query()->where('user_id', Auth::id())->get();
        $orderNumber = 'Ref-' . Str::uuid()->toString();
        //Ref-d9b1e79f-4567-4fb2-b9da-9259231458fa
        $this->submitOrderBeforePayment($cartItems, $paymentGateWay->getPaymentMethodId(), $orderNumber,$totalAmount,$deliveryMethodId,$addressId);
        return $paymentGateWay->request($totalAmount, $orderNumber);

    }
}
