<?php

namespace App\Repositories\admin;

interface AdminDeliveryRepositoryInterface
{
    public function submit($formData,$deliveryId);

}
