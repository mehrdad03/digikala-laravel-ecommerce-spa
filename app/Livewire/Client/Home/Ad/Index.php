<?php

namespace App\Livewire\Client\Home\Ad;

use Livewire\Component;

class Index extends Component
{

    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.ad-skeleton');
    }
    public function render()
    {
        return view('livewire.client.home.add.index');
    }
}
