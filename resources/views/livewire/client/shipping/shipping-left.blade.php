<div class="shipping-left">
    <div class="final-invoice">
        <form wire:submit="checkDiscountCode(Object.fromEntries(new FormData($event.target)))"
              class="discount-code mb-3">
            <span class="mb-1 d-block">کد تحفیف</span>
            <div class=" d-flex justify-content-between">
                <input
                    class="@if (session()->has('error') || $errors->has('code')) invalid-border @endif"
                    type="text" name="code" wire:model="code">
                <button>ثبت</button>
            </div>
            @error('code')
            <span class="validation-error">
                {{$message}}
            </span>
            @enderror
            @if (session()->has('success'))
                <span class="success-message">
                    {{ session('success') }}
                </span>
            @endif

            @if (session()->has('error'))
                <span class="validation-error">
                    {{ session('error') }}
                </span>
            @endif

        </form>
        <div class="d-flex align-items-center mb-3 justify-content-between">
            <span>قیمت کالاها ({{number_format($totalProductCount)}})</span>
            <span>{{number_format($totalOriginalPrice)}}تومان</span>
        </div>
        <div class="d-flex align-items-center mb-3 justify-content-between">
            <span>هزینه ارسال</span>
            <span>{{number_format($deliveryPrice)}}تومان</span>
        </div>
        <div class="d-flex  align-items-center mb-3 justify-content-between">
            <span>سود شما از خرید</span>
            <span>{{number_format($totalDiscount)}}تومان</span>
        </div>
        @if($showDiscountCode)
            <div class="d-flex  align-items-center mb-3 justify-content-between">
                <span>کد تخفیف</span>
                <span>{{number_format($discountCodeAmount)}}تومان</span>
            </div>
        @endif

        <div class="d-flex df align-items-center mb-3 justify-content-between">
            <span>قابل پرداخت</span>
            <span>{{number_format($totalAmount)}}تومان</span>
        </div>
        <button wire:click="submitOrder" class="addToBasket-btn w-100 p-2 fs-6 mt-2">
            ثبت سفارش
        </button>
    </div>

</div>
