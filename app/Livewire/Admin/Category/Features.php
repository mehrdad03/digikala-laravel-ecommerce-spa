<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use Livewire\Component;
use Livewire\WithPagination;

class Features extends Component
{
    use WithPagination;

    public function render()
    {

        $categoryFeatures = CategoryFeature::query()->paginate(10);

        return view('livewire.admin.category.features.index', [
            'categoryFeatures' => $categoryFeatures
        ])->layout('layouts.admin.app');
    }
}
