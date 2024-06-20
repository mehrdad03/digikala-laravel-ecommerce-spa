<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {

        $products = Product::query()
            ->with('category','coverImage')
            ->latest()
            ->paginate(10);
        return view('livewire.admin.product.index', [
            'products' => $products
        ])->layout('layouts.admin.app');
    }
}
