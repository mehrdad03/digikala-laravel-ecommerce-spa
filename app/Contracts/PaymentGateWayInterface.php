<?php

namespace App\Contracts;

interface PaymentGateWayInterface
{
    public function request($amount,$orderNumber);
    public function verify($request);
    public function getPaymentMethodId();

}
