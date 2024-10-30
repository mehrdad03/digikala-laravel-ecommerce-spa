<?php

namespace App\Livewire\Client\Product;


use App\Repositories\client\product\ClientProductRepositoryInterface;
use Livewire\Component;

class Index extends Component
{
    public $product;

    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount($p_code)
    {
        $product = $this->repository->getSingleProduct($p_code);

        if ($product) {
            // اگر تخفیف درصدی است و مقدار discount موجود باشد
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
        }

        $this->product = $product;

    }

    public function render()
    {
        return view('livewire.client.product.index');
    }
}
