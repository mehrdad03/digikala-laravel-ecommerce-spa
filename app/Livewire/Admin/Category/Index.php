<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categories = [];
    public function mount()
    {
        $this->categories = Category::all();

    }
    public function render()
    {

        $categories = Category::query()->latest()->paginate(100);
        return view('livewire.admin.category.index', [
            'allCategories' => $categories
        ])->layout('layouts.admin.app');
    }
}
