<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FeatureValue extends Component
{
    public $featureName;
    public $featureId;
    public $valueId;
    public $value;

    public function mount(CategoryFeature $categoryFeature)
    {

        $this->featureName = $categoryFeature->name;
        $this->featureId = $categoryFeature->id;


    }

    public function submit($formData, CategoryFeatureValue $categoryFeatureValue)
    {

        $validator = Validator::make($formData, [
            'value' => 'required|string|max:50',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 50',
        ]);

        $validator->validate();
        $this->resetValidation();
        $categoryFeatureValue->submit($formData, $this->valueId, $this->featureId);
        $this->reset('value');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }

    public function edit($valueId)
    {

        $featureValue = CategoryFeatureValue::query()->where('id', $valueId)->first();

        if ($featureValue) {
            $this->value = $featureValue->value;
            $this->featureId = $featureValue->category_feature_id;
            $this->valueId = $featureValue->id;
        }

    }

    public function delete($valueId)
    {

        CategoryFeatureValue::query()->where('id', $valueId)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');


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
