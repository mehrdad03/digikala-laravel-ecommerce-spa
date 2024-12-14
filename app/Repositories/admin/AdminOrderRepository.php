<?php

namespace App\Repositories\admin;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use App\Models\Order;

class AdminOrderRepository implements AdminOrderRepositoryInterface
{

    public function getOrderDetails($order)
    {
        $orderDetails = $order->load([
            'orderItems.product:id,name,price,p_code',
            'orderItems.product.coverImage:id,path,product_id',
            'payment',
            'paymentMethod',
            'deliveryMethod',
            'address',
            'address.country',
            'address.state',
            'address.city',
        ]);

        $parts = explode('-', $orderDetails->order_number);
        $orderDetails->order_number = $parts[2] ?? null;
        $orderDetails->statusPaymentColor = $this->getStatusColor($orderDetails->payment->status);

        return $orderDetails;
    }

    public function getOrdersWithFilters($search = null, $status = null)
    {
        $query = Order::query()
            ->with('user', 'payment');


        if ($search) {
            $query->where('order_number', 'like', '%' . $search . '%')
                ->orWhereHas('user', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('mobile', 'like', '%' . $search . '%')
                        ->orWhere('email', 'like', '%' . $search . '%');
                });
        }


        if ($status && $status != 'all') {
            $query->where('status', '=', $status);
        }
        return $query->latest();
    }

    public function transformQuery($orders)
    {
        return $orders->getCollection()->transform(function ($order) {
            $parts = explode('-', $order->order_number);
            $order->order_number = $parts[2] ?? null;

            $order->statusColor = $this->getStatusColor($order->status);
            $order->statusPaymentColor = $this->getStatusColor($order->payment->status);

            return $order;
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
