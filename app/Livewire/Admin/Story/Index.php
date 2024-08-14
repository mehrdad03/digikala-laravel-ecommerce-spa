<?php

namespace App\Livewire\Admin\Story;

use App\Models\Story;
use App\Repositories\admin\AdminStoryRepository;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $title;
    public $thumbnail;
    public $story;

    private $repository;

    public function boot(AdminStoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData)
    {

        if ($this->thumbnail) {
            $formData['thumbnail'] = $this->thumbnail;
        }
        if ($this->story) {
            $formData['story'] = $this->story;
        }

        $validator = Validator::make($formData, [
            'title' => 'required|string|max:50',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',//1MB
            'story' => 'required|mimes:mp4|max:51200',//50MB
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'thumbnail.mimes' => 'فرمت های مجاز تصویر : jpg,jpeg,png,webp !',
            'story.mimes' => 'فرمت های مجاز استوری : mp4 !',
            'thumbnail.max' => 'سایز تصویر حداکثر : ! 1MB',
            'story.max' => 'سایز استوری حداکثر : ! 50MB',
        ]);

        $validator->validate();
        $this->resetValidation();

        $this->repository->submit($formData, $this->thumbnail, $this->story);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');
        $this->reset();

    }

    public function delete(Story $story)
    {
        $this->repository->delete($story);
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');

    }


    public function changeStatus(Story $story)
    {
        $this->repository->changeStatus($story);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }

    public function render()
    {
        $stories = Story::query()->paginate(10);

        return view('livewire.admin.story.index', [
            'stories' => $stories
        ])->layout('layouts.admin.app');

    }
}
