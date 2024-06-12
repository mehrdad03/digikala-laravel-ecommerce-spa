<?php

namespace App\Livewire\Admin\Layout;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.admin.layout.header')->layout('layouts.admin.app');
    }
}
