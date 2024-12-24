<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::query()
            ->withCount('orders')
            ->latest();

        if ($this->search) {
            $users->where('mobile', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        }

        return view('livewire.admin.user.index', [
            'users' => $users->paginate(10)
        ])->layout('layouts.admin.app');
    }
}
