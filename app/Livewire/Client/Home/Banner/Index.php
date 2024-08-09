<?php

namespace App\Livewire\Client\Home\Banner;

use Livewire\Component;

class Index extends Component
{
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.banner-skeleton');
    }
    public function render()
    {
        sleep(2);
        return view('livewire.client.home.banner.index');
    }
}
