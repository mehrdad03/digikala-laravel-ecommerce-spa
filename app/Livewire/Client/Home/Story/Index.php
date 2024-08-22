<?php

namespace App\Livewire\Client\Home\Story;

use App\Models\Story;
use Livewire\Component;

class Index extends Component
{
    public $stories=[];
    public function mount()
    {
        $this->stories=Story::query()->where('status','=',true)->limit(15)->get();
    }
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.stories-skeleton');
    }
    public function render()
    {
        return view('livewire.client.home.story.index');
    }
}
