<?php

namespace App\Livewire\Admin\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.admin.layout.sidebar')->layout('layouts.admin.app');
    }
}
