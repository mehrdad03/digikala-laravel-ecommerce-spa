<?php

namespace App\Livewire\Client\Product;

use App\Models\Cart;
use App\Repositories\client\product\ClientProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BuyBox extends Component
{
    public $price;
    public $sellerName;
    public $disocunt;
    public $finalPrice;
    public $productId;
    public $inCart = false;

    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->inCart = $this->repository->checkProductInCart($this->productId);
    }

    public function addToCart()
    {
        $this->repository->addToCart($this->productId);
        sleep(1);
        $this->inCart = true;
        $this->dispatch('add-to-cart', productId: $this->productId);

    }

    public function render()
    {
        return view('livewire.client.product.buy-box');
    }
}
