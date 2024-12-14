<?php

namespace App\Livewire\Admin\Order;

use App\Models\Order;
use App\Repositories\admin\AdminOrderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Details extends Component
{
    public $orderDetails;
    public $statusColor;
    private $repository;

    public function boot(AdminOrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function mount(Order $order)
    {
       $this->orderDetails= $this->repository->getOrderDetails($order);

        $this->statusColor = $this->repository->getStatusColor($this->orderDetails->status);

    }
    public function getStatusColor($status)
    {
       return $this->repository->getStatusColor($status);

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
        $this->statusColor=$this->getStatusColor($order->status);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');


    }

    public function render()
    {
        return view('livewire.admin.order.details')->layout('layouts.admin.app');
    }
}
