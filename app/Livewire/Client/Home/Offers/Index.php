<?php

namespace App\Livewire\Client\Home\Offers;

use Livewire\Component;

class Index extends Component
{
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.offers-skeleton');
    }

    public function render()
    {

        return view('livewire.client.home.offers.index');
    }
}
