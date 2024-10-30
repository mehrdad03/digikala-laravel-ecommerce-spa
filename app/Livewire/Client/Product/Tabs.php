<?php

namespace App\Livewire\Client\Product;

use App\Models\Product;
use App\Models\ProductFeatureValue;
use App\Models\ProductReviews;
use App\Models\ProductReviewVote;
use App\Models\ProductVote;
use App\Repositories\client\product\ClientProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Tabs extends Component
{
    public $productId;
    public $name;
    public $sellerName;
    public $shortDescription;
    public $longDescription;
    public $activeTab = 0;
    public $productFeatures = [];
    public $productReviews = [];

    public $title = '';
    public $comment = '';

    public $positiveInput = '';
    public $positiveItems = [];

    public $negativeInput = '';
    public $negativeItems = [];
    public $submitSuccessAlert = false;

    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        app()->setLocale('fa');
        $this->changeTab(1);
    }

    public function changeTab($tabNumber)
    {

        $this->activeTab = $tabNumber;

        $product = Product::query()->where('id', $this->productId);


        if ($tabNumber == 1) {
            $this->shortDescription = $product->pluck('short_description')->first();
        } elseif ($tabNumber == 2) {
            $this->longDescription = $product->pluck('long_description')->first();
        } elseif ($tabNumber == 3) {
            $this->getProductFeatures($this->productId);
        } elseif ($tabNumber == 4) {
            $this->getProductReviews($this->productId);
        }

    }

    public function getProductFeatures($productId)
    {
        $this->productFeatures = $this->repository->getProductFeatures($productId);
    }

    public function getProductReviews($productId)
    {
        $this->productReviews = $this->repository->getProductReviews($productId);
    }

    public function removeItem($type, $index)
    {
        $itemsField = $type === 'positive' ? 'positiveItems' : 'negativeItems';
        array_splice($this->{$itemsField}, $index, 1);

    }

    public function addItem($type)
    {
        $inputField = $type === 'positive' ? 'positiveInput' : 'negativeInput';
        $itemsField = $type === 'positive' ? 'positiveItems' : 'negativeItems';

        $this->validate([
            $inputField => 'required|min:3|max:50',
        ], [
            $inputField . '.required' => 'فیلد الزامی',
            $inputField . '.min' => 'حداقل باید 3 کاراکتر باشد',
            $inputField . '.max' => 'حداکثر باید 50 کاراکتر باشد',
        ]);

        $this->{$itemsField}[] = $this->{$inputField};
        $this->{$inputField} = '';
    }

    public function submitReview($formData)
    {
        $validator = Validator::make($formData, [
            'title' => 'required|string|min:10|max:100',
            'comment' => 'required|string|min:10|max:250',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 250',
            '*.min' => 'حداقل باید 10 کاراکتر باشد',
        ]);

        $validator->validate();
        $this->resetValidation();

        $this->productReviews = $this->repository->
        getProductReviews($formData, $this->productId, $this->positiveItems, $this->negativeItems);

        $this->submitSuccessAlert = true;
        $this->reset('title', 'comment', 'positiveInput', 'negativeInput');
        $this->positiveItems = [];
        $this->negativeItems = [];

    }
    public function setVote($status, $reviewId)
    {
        if (Auth::check()) {
            sleep(1);
            $this->productReviews = $this->repository->setVote($status,$reviewId);
            $this->getProductReviews($this->productId);
        } else {
            return redirect()->route('client.auth.index');
        }

    }

    public function render()
    {
        return view('livewire.client.product.tabs');
    }
}
