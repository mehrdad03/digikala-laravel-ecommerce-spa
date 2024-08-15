<?php

namespace App\Livewire\Client\Home\Slider;

use App\Models\Slider;
use Livewire\Component;

class Index extends Component
{

    public $sliders = [];

    public function mount()
    {
        $this->sliders = Slider::query()->where('status', '=', true)->get();
    }

    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.slider-skeleton');
    }

    public function render()
    {
        return view('livewire.client.home.slider.index');
    }
}
