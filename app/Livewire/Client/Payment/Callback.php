<?php

namespace App\Livewire\Client\Payment;

use App\Contracts\PaymentGateWayInterface;
use Illuminate\Http\Request;
use Livewire\Component;

class Callback extends Component
{

    public function mount(Request $request,PaymentGateWayInterface $paymentGateWay)
    {
       $paymentGateWay->verify($request);
    }

    public function render()
    {
        return view('livewire.client.payment.callback')->layout('layouts.client.app-v2');
    }
}
