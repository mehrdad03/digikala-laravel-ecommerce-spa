<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use Livewire\Component;

class FeatureValue extends Component
{
    public $featureName;
    public $featureId;

    public function mount(CategoryFeature $categoryFeature)
    {
        $this->featureName=$categoryFeature->name;
        $this->featureId=$categoryFeature->id;


    }
    public function render()
    {
        $featureValues = CategoryFeatureValue::query()
            ->where('category_feature_id', $this->featureId)
            ->paginate(10);

        return view('livewire.admin.category.feature-value.index', [
            'featureValues' => $featureValues
        ])->layout('layouts.admin.app');
    }
}
