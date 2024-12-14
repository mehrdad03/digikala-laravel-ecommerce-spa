<?php

namespace App\Repositories\admin;

interface AdminTransactionRepositoryInterface
{
    public function getStatusColor($status);
    public function getTransactionWithFilters($search=null,$status=null);

}
