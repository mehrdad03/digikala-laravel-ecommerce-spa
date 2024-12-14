<?php

namespace App\Livewire\Client\Shipping;

use App\Contracts\PaymentGateWayInterface;
use App\Models\Address;
use App\Models\City;
use App\Models\Coupons;
use App\Models\DeliveryMethod;
use App\Models\State;
use App\Repositories\client\Shipping\ClientShippingRepositoryInterface;
use Artesaos\SEOTools\Traits\SEOTools;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public $deliveries = [];
    public $addressList = [];
    public $provinces = [];
    public $cities = [];
    public $addressId = 0;

    //Edit address properties
    public $postalCode = '';
    public $mobile = '';
    public $city = '';
    public $province = '';
    public $address = '';

    //invoice properties
    public $totalProductCount = 0;
    public $totalOriginalPrice = 0;
    public $totalDiscount = 0;
    public $totalDiscountedPrice = 0;

    public $deliveryPrice = 0;
    public $totalAmount = 0;
    public $deliveryMethodId = 0;

    //coupons
    public $discountCodeAmount = 0;
    public $showDiscountCode = false;


    private $repository;

    public function boot(ClientShippingRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->seoConfig();
        $invoice = optional(Session::get('invoiceFromCart'));
        if ($invoice) {
            $this->totalProductCount = $invoice['totalProductCount'];
            $this->totalOriginalPrice = $invoice['totalOriginalPrice'];
            $this->totalDiscount = $invoice['totalDiscount'];
            $this->totalDiscountedPrice = $invoice['totalDiscountedPrice'];
        }

        $this->deliveries = DeliveryMethod::all();
        $this->deliveryPrice = $this->deliveries->first()->price;
        $this->deliveryMethodId = $this->deliveries->first()->id;
        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $this->discountCodeAmount);
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('جزییات ارسال سفارش')
            ->setDescription('هر آنچه که نیاز دارید با بهترین قیمت از دیجی‌کالا بخرید! - برای خرید کلیک کنید!');

    }

    public function totalAmountForPayment($totalDiscountedPrice, $deliveryPrice, $discountCodeAmount)
    {
        $this->totalAmount = ($totalDiscountedPrice + $deliveryPrice) - $discountCodeAmount;

    }

    public function getAddressId($addressId)
    {
        $this->addressId = Address::query()->where([
            'user_id' => Auth::id(),
            'id' => $addressId,
        ])->first()->id;

    }

    public function changeDeliveryPrice($deliveryId)
    {
        $this->deliveryMethodId = $deliveryId;
        $newDeliveryPrice = $this->deliveryPrice = DeliveryMethod::query()->where('id', $deliveryId)->pluck('price')->first();
        $this->totalAmountForPayment($this->totalDiscountedPrice, $newDeliveryPrice, $this->discountCodeAmount);
    }

    public function submit($formData)
    {

        $validator = Validator::make($formData, [
            'address' => 'required|string|min:10|max:100',
            'province' => 'required|exists:states,id',
            'city' => 'required|exists:cities,id',
            'postalCode' => ['required', 'regex:/^[1-9][0-9]{9}$/'],
            'mobile' => ['required', 'regex:/^09[0-9]{9}$/'],
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 100',
            '*.min' => 'حداکثر تعداد کاراکترها : 10',
            'province.exists' => 'استان نامعتبر است .',
            'city.exists' => 'شهر نامعتبر است .',
            'postalCode.regex' => 'کد پستی باید یک عدد ۱۰ رقمی باشد که با صفر شروع نشود.',
            'mobile.regex' => 'شماره موبایل باید با 09 شروع شود و دقیقاً 11 رقم باشد.',
        ]);

        $validator->validate();
        $this->resetValidation();

        Address::query()->updateOrCreate(
            [
                'id' => $this->addressId
            ],
            [
                'mobile' => $formData['mobile'],
                'address' => $formData['address'],
                'state_id' => $formData['province'],
                'city_id' => $formData['city'],
                'country_id' => 1,
                'postal_code' => $formData['postalCode'],
                'user_id' => Auth::id()
            ]
        );

        $this->dispatch('close-modal');
    }

    public function getProvinces($type)
    {
        if ($type == 'add') {
            $this->addressId = 0;
            $this->reset('postalCode', 'city', 'province', 'address', 'mobile');
            $this->cities = [];
        }
        $this->provinces = State::all();
    }

    public function getCity($value)
    {

        $this->cities = City::query()->where('state_id', $value)->get();
    }

    public function editAddress($addressId)
    {
        $this->addressId = $addressId;
        $addressDetails = Address::query()->where('id', $addressId)->first();
        if ($addressDetails) {
            $this->address = $addressDetails->address;
            $this->mobile = $addressDetails->mobile;
            $this->postalCode = $addressDetails->postal_code;
            $this->getProvinces('edit');
            $this->province = $addressDetails->state_id;
            $this->getCity($this->province);
            $this->city = $addressDetails->city_id;
        }
    }

    public function checkDiscountCode($formData): void
    {

        $validator = Validator::make($formData, [
            'code' => 'required|string|exists:coupons,code|min:4|max:6',

        ], [
            'code.required' => 'فیلد ضروری است.',
            'code.string' => 'فرمت اشتباه است !',
            'code.max' => 'حداکثر تعداد کاراکترها : 6',
            'code.min' => 'حداکثر تعداد کاراکترها : 4',
            'code.exists' => 'کد تخفیف وارد شده معتبر نیست.',

        ]);
        $validator->validate();
        $this->resetValidation();


        $code = Coupons::query()->where('code', $formData['code'])->first();

        $this->applyDiscount($code);

    }

    public function applyDiscount($code)
    {
        if (!$code->is_active || (Carbon::parse($code->expires_at)->isPast())) {
            session()->flash('error', 'این کد تخفیف معتبر نیست یا منقضی شده است.');
            return;
        }

        if (($this->totalAmount < $code->min_purchase) || $code->limit <= 0) {
            session()->flash('error', 'شرایط استفاده از این کد تخفیف برقرار نیست.');
            return;
        }
        $this->discountCodeAmount = $discount = $code->type == 'percent' ? ($this->totalDiscountedPrice * $code->value) / 100 : $code->value;

        $this->totalAmountForPayment($this->totalDiscountedPrice, $this->deliveryPrice, $discount);

        $this->showDiscountCode = true;
        session()->flash('success', 'کد تخفیف با موفقیت اعمال شد.');

    }

    //Payments methods
    public function checkQuantity($cartItems)
    {
        $this->repository->checkQuantity($cartItems);


    }

    public function createOrder($orderNumber, $paymentMethodId)
    {
        return $this->repository->createOrder($orderNumber, $paymentMethodId, $this->totalAmount, $this->deliveryMethodId, $this->addressId);
    }

    public function createOrderItems($cartItems, $orderId)
    {
        $this->repository->createOrderItems($cartItems, $orderId);
    }

    public function createPayment($orderId, $orderNumber)
    {
        $this->repository->createPayment($orderId, $orderNumber, $this->totalAmount);
    }

    public function submitOrderBeforePayment($cartItems, $paymentMethodId, $orderNumber)
    {
        $this->repository->createPayment($cartItems, $paymentMethodId, $orderNumber);

    }

    public function submitOrder(PaymentGateWayInterface $paymentGateWay)
    {
        $this->repository->submitOrder($paymentGateWay,$this->totalAmount,$this->deliveryMethodId,$this->addressId);

    }

    public function render()
    {
        $addressList = $this->addressList = Address::query()->where('user_id', Auth::id())->latest()->get();
        $this->addressId = $addressList->first()->id;

        return view('livewire.client.shipping.index')->layout('layouts.client.app-v2');
    }
}
