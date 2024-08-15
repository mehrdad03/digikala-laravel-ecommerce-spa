<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use App\Repositories\admin\AdminSliderRepository;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $link;


    private $repository;

    public function boot(AdminSliderRepository $repository)
    {
        $this->repository = $repository;
    }


    public function submit($formData)
    {

        if ($this->image) {
            $formData['image'] = $this->image;
        }

        $validator = Validator::make($formData, [
            'title' => 'required|string|max:50',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:1024',//1MB
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'image.mimes' => 'فرمت های مجاز تصویر : jpg,jpeg,png,webp !',
            'image.max' => 'سایز تصویر حداکثر : ! 1MB',
        ]);

        $validator->validate();
        $this->resetValidation();

        $this->repository->submit($formData,$this->image);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');
        $this->reset();

    }

    public function delete(Slider $slider)
    {
        $this->repository->delete($slider);
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');

    }


    public function changeStatus(Slider $slider)
    {
        $this->repository->changeStatus($slider);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }

    public function render()
    {
        $sliders = Slider::query()->get();
        return view('livewire.admin.slider.index', [
            'sliders' => $sliders
        ])->layout('layouts.admin.app');
    }
}
