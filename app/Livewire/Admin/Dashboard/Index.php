<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.index')->layout('layouts.admin.app');
    }
}
