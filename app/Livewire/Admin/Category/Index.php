<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Repositories\admin\AdminCategoryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $categories = [];
    public $name;
    public $categoryId;
    public $parentId;

    private $repository;

    public function boot(AdminCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->categories = Category::all();

    }

    public function submit($formData)
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
        $this->repository->submit($formData, $this->categoryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }


    public function edit($categoryId)
    {

        $category = Category::query()->where('id', $categoryId)->first();

        if ($category) {
            $this->name = $category->name;
            $this->categoryId = $category->id;
            $this->parentId = $category->category_id;
        }

    }

    public function delete($categoryId)
    {

        $category = Category::query()->where('id', $categoryId)->first();

        if ($category->children()->exists()){
            $this->dispatch('error','این دسته‌بندی دارای زیرشاخه است و نمی‌توان آن را حذف کرد!');
            return;
        }

       $category->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');


    }

    public function render()
    {

        $categories = Category::query()->latest()->paginate(100);
        return view('livewire.admin.category.index', [
            'allCategories' => $categories
        ])->layout('layouts.admin.app');
    }
}
