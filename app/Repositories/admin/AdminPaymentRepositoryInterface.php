<?php

namespace App\Repositories\admin;

interface AdminPaymentRepositoryInterface
{
    public function submit($formData, $paymentId);

}
