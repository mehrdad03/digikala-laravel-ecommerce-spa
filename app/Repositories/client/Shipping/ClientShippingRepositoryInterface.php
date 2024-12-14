<?php

namespace App\Repositories\client\Shipping;


interface ClientShippingRepositoryInterface
{
    public function checkQuantity($cartItems);

    public function createOrder($orderNumber, $paymentMethodId,$totalAmount,$deliveryMethodId,$addressId);

    public function createOrderItems($cartItems, $orderId);

    public function createPayment($orderId, $orderNumber,$totalAmount);

    public function submitOrderBeforePayment($cartItems, $paymentMethodId, $orderNumber,$totalAmount,$deliveryMethodId,$addressId);

    public function submitOrder($paymentGateWay, $totalAmount,$deliveryMethodId,$addressId);

}
