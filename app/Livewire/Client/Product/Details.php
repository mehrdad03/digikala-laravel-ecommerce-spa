<?php

namespace App\Livewire\Client\Product;

use Livewire\Component;

class Details extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.client.product.details');
    }
}
