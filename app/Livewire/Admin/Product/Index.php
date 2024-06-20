<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\SeoItem;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public function delete($productId)
    {

        $product=Product::query()->where('id',$productId)->first();
        if ($product){
            $product->delete();
        }
        //delete product from products table

        //delete seo items from seoItems table
        SeoItem::query()->where('ref_id',$productId)->delete();
        //delete image from productImages table

    }

    public function render()
    {

        $products = Product::query()
            ->with('category', 'coverImage')
            ->latest()
            ->paginate(10);
        return view('livewire.admin.product.index', [
            'products' => $products
        ])->layout('layouts.admin.app');
    }
}
