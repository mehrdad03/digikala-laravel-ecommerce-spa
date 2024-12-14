<?php

namespace App\Repositories\admin;

interface AdminOrderRepositoryInterface
{
    public function getOrderDetails($order);
    public function getStatusColor($status);
    public function getOrdersWithFilters($search=null,$status=null);

}
