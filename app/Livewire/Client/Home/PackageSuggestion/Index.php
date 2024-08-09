<?php

namespace App\Livewire\Client\Home\PackageSuggestion;

use Livewire\Component;

class Index extends Component
{
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.package-suggestion-skeleton');
    }
    public function render()
    {

        return view('livewire.client.home.package-suggestion.index');
    }
}
