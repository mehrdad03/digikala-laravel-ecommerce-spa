<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Content extends Component
{
    public $productName;
    public $longDescription;
    public $shortDescription;
    public $productId;

    public function mount(Product $product)
    {
        $this->productName = $product->name;
        $this->productId = $product->id;
        $this->shortDescription = $product->short_description;
        $this->longDescription = $product->long_description;

    }

    public function submit($formData, Product $product)
    {
        $formData['long_description'] = $this->longDescription;

        $validator = Validator::make($formData, [
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
        ]);

        $validator->validate();
        $this->resetValidation();
        $product->submitProductContent($formData,$this->productId);
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'محتوای محصول با موفقیت ثبت شد');

    }

    public function render()
    {
        return view('livewire.admin.product.content')->layout('layouts.admin.app');
    }
}
