<?php

namespace App\Livewire\Client\Home\Slider;

use Livewire\Component;

class Index extends Component
{

    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.slider-skeleton');
    }
    public function render()
    {

        return view('livewire.client.home.slider.index');
    }
}
