<?php

namespace App\Livewire\Client\Home\Story;

use Livewire\Component;

class Index extends Component
{
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.stories-skeleton');
    }

    public function render()
    {
        sleep(1);
        return view('livewire.client.home.story.index');
    }
}
