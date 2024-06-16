<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categories = [];
    public $name;
    public $categoryId;
    public function mount()
    {
        $this->categories = Category::all();

    }

    public function submit($formData,Category $category)
    {


        $validator = Validator::make($formData, [
            'name' => 'required|string|max:30',
            'parentId' => 'nullable|exists:categories,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'parentId.exists' => 'دسته بندی نامعتبر است .',
        ]);

        $validator->validate();
        $this->resetValidation();
        $category->submit($formData, $this->categoryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }
    public function render()
    {

        $categories = Category::query()->latest()->paginate(100);
        return view('livewire.admin.category.index', [
            'allCategories' => $categories
        ])->layout('layouts.admin.app');
    }
}
