<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.product.index')->layout('layouts.admin.app');
    }
}
