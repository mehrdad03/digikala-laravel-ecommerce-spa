<?php

namespace App\Repositories\admin;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use App\Models\Order;
use App\Models\Payment;

class AdminTransactionRepository implements AdminTransactionRepositoryInterface
{

    public function getTransactionWithFilters($search = null, $status = null)
    {
        $query = Payment::query()
            ->with('order')
            ->latest();

        if ($search) {
            $query->where('order_number', 'like', '%' . $search . '%')
                ->orWhere('refNumber', 'like', '%' . $search . '%')
                ->orWhere('cardNumber', 'like', '%' . $search . '%');
        }


        if ($status && $status != 'all') {
            $query->where('status', '=', $status);
        }
        return $query->latest();
    }

    public function transformQuery($transactions)
    {
        return $transactions->getCollection()->transform(function ($item) {

            $item->statusPaymentColor = $this->getStatusColor($item->status);

            return $item;
        });

    }

    public function getStatusColor($status)
    {
        switch ($status) {
            case 'pending':
                return 'primary';
            case 'processing':
                return 'info';
            case 'completed':
                return 'success';
            case 'canceled':
                return 'danger';
        }
    }

}
