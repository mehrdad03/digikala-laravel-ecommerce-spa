<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use App\Repositories\admin\AdminOrderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    private $repository;

    public function boot(AdminOrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function changeStatus(Order $order, $value)
    {
        $validator = Validator::make(['status' => $value, 'id' => $order->id], [
            'status' => 'required|in:pending,processing,completed,canceled',
            'id' => 'required|exists:orders,id',

        ], [
            '*.required' => 'فیلد ضروری است.',
            'status.in' => 'مقدار وارد شده اشتباه است !',
            'id.exists' => 'سفارش نامعتبر است',

        ]);
        $validator->validate();
        $this->resetValidation();

        $order->update(['status' => $value]);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');
    }

    public function render()
    {

        $ordersQuery = $this->repository->getOrdersWithFilters($this->search, $_GET['status'] ?? 'all');
        $orders = $ordersQuery->paginate(10);
        $this->repository->transformQuery($orders);


        return view('livewire.admin.order.index', [
            'orders' => $orders
        ])->layout('layouts.admin.app');
    }
}
