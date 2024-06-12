<?php

namespace App\Livewire\Admin\Country;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.country.index')->layout('layouts.admin.app');
    }
}
