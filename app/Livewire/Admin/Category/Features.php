<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Features extends Component
{
    use WithPagination;


    public $categoryName;
    public $categoryId;
    public $featureId;

    public function mount(Category $category)
    {
        $this->categoryName=$category->name;

        $this->categoryId=$category->id;


    }

    public function submit($formData,CategoryFeature $categoryFeature)
    {

        $validator = Validator::make($formData, [
            'name' => 'required|string|max:30',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
        ]);

        $validator->validate();
        $this->resetValidation();
        $categoryFeature->submit($formData,$this->categoryId, $this->featureId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }


    public function render()
    {

        $categoryFeatures = CategoryFeature::query()->paginate(10);

        return view('livewire.admin.category.features.index', [
            'categoryFeatures' => $categoryFeatures
        ])->layout('layouts.admin.app');
    }
}
