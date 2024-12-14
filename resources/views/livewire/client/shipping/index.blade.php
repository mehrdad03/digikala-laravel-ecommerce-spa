<div>
    @push('link')
        <link rel="stylesheet" href="/client/assets-v2/css/shipping.css"/>
    @endpush
    <section class="shipping">
        <div class="mb-3 shipping-top d-flex align-items-center ">
          <span class="d-flex align-items-center">
            <i class="fa-light fa-arrow-right ml-2"></i>
            آدرس و زمان ارسال
          </span>
            <div class="logo">
                <img src="/client/assets-v2/images/full-horizontal.svg" alt=""/>
            </div>
        </div>
        <div class="shipping-content d-flex">
            @include('livewire.client.shipping.shipping-right')
            @include('livewire.client.shipping.shipping-left')
        </div>

    </section>
    <!-- Add address modal box -->
    @include('livewire.client.shipping.address-modal-box')


    @push('script')
        <script src="/client/assets-v2/js/jquery.min.js"></script>
        <script src="/client/assets-v2/js/shipping.js"></script>
    @endpush
</div>
