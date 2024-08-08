<?php

namespace App\Livewire\Client\Home\Story;

use Livewire\Component;

class Index extends Component
{
    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }

    public function render()
    {
        sleep(2);
        return view('livewire.client.home.story.index');
    }
}
