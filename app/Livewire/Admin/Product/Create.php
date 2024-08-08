<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Seller;
use App\Repositories\admin\AdminProductRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $photos = [];


    public $categories = [];
    public $sellers = [];

    public $name;
    public $slug;

    public $productId;

    public $coverIndex = 0;

    //edit
    public $product;


    private $repository;

    public function boot(AdminProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        if ($_GET and $_GET['p_id']) {
            $this->productId = $_GET['p_id'];
            $product = $this->product = Product::query()
                ->with('seo', 'images')
                ->where('id', $this->productId)->firstOrFail();
            $this->name = $product->name;
            @$this->slug = $product->seo->slug;
            @$this->coverIndex = $product->coverImage->id;
        }


        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-', null);
    }

    public function submit($formData)
    {

        if (isset($formData['featured'])) {
            $formData['featured'] = true;
        } else {
            $formData['featured'] = false;
        }

        if ($formData['discount_duration'] == "") {
            $formData['discount_duration'] = null;
        }

        if (!isset($formData['selleId'])) {
            $formData['sellerId'] = null;
        }


        $formData['photos'] = $this->photos;

        //insert index of cover image into the formData for validation
        $formData['coverIndex'] = $this->coverIndex;

        $validator = Validator::make($formData, [
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'name' => 'required|string',
            'slug' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'stock' => 'required|integer',
            'featured' => 'nullable|boolean',
            'discount_duration' => 'nullable|string',
            'sellerId' => 'nullable|exists:sellers,id',
            'categoryId' => 'required|exists:categories,id',


            'coverIndex' => 'required',
        ], [

            'coverIndex.required' => 'لطفا یک تصویر شاخص انتخاب کنید!',
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.integer' => 'این فیلد باید از نوع عددی باشد!',
            '*.min' => 'حداکثر تعداد کاراکترها : 50',
            'categoryId.exists' => 'دسته بندی نامعتبر است .',
            'sellerId.exists' => 'فروشنده نامعتبر است .',
            'photos.*.image' => 'فرمت نامعتبر است .',

        ]);

        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->productId, $this->photos, $this->coverIndex);
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'محصول با موفقیت افزود شد!');


    }

    public function setCoverImage($index)
    {
        $this->coverIndex = $index;
    }

    public function removePhoto($index)
    {
        if ($index == $this->coverIndex) {
            $this->coverIndex = null;
        }
        array_splice($this->photos, $index, 1);

    }


    //edit

    public function removeOldPhoto(ProductImage $productImage, $productId)
    {

        $this->repository->removeOldPhoto($productImage, $productId);

    }

    public function setCoverOldImage($photoId)
    {
        $this->repository->setCoverOldImage($photoId,$this->productId);
        $this->dispatch('success', 'تصویر کاور با موفقیت تغییر کرد!');

    }


    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}
