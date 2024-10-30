<?php

namespace App\Livewire\Client\Header;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $cart = 0;

    public function mount()
    {

        $this->cart = Cart::query()
            ->where('user_id', Auth::id())->count();

    }

    #[On('add-to-cart')]
    public function getUserCart($productId)
    {
        $this->cart = $this->cart + 1;
    }

    public function render()
    {
        return view('livewire.client.header.index');
    }
}
