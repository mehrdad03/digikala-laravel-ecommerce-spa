<?php

namespace App\Livewire\Client\Home\Offers;

use App\Repositories\client\first_page\ClientFirstPageRepositoryInterface;
use Livewire\Component;

class Index extends Component
{
    public $featuredProducts = [];
    private $repository;

    public function boot(ClientFirstPageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->featuredProducts = $this->repository->getFeaturedProducts();

    }

    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.offers-skeleton');
    }

    public function render()
    {
        return view('livewire.client.home.offers.index');
    }
}
