<div>
    @push('style')
        <link rel="stylesheet" href="/client/css/product.css"/>
    @endpush
    <!-- === mobile add to card === -->
    <div class="fixed-bottom bg-white d-lg-none border-top bg-danger py-4 px-3">
        <!-- text slider -->
        <div class="slider">
            <p class="active text-danger fs-9 fw-medium">❤️ ۵۰۰+ نفر به این کالا علاقه دارند</p>
            <p class="text-success fs-9 fw-medium">🤩 بهترین قیمت در ۳۰ روز گذشته</p>
            <p class="text-success fs-9 fw-medium">🧺 در سبد خرید ۱۰۰۰+ نفر</p>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <button class="btn btn-danger py-2 fs-9">افزودن به سبر خرید</button>
            <div class="d-flex align-items-center justify-content-end">
                <button
                    type="button"
                    class="bg-transparent border-0"
                    data-bs-toggle="tooltip"
                    data-bs-placement="left"
                    title="این کالا توسط فروشنده آن قیمت گذاری شده">
                    <svg
                        width="16"
                        height="16"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6 text-secondary">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"/>
                    </svg>
                </button>
                <p class="fs-9">20,430,000</p>
                <p class="fs-9 fw-light me-1">تومان</p>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb fs-8 text-secondary d-flex align-items-center gap-2">
        <a href="#" class="text-secondary">دیجی کالا</a>
        <p>/</p>
        <a href="#" class="text-secondary">کالای دیجیتال</a>
        <p>/</p>
        <a href="#" class="text-secondary">ساعت هوشمند</a>
    </div>

    <!-- ====== Product Detail ====== -->
    <section class="my-lg-5 row mx-lg-5">
        <!-- === Picture === -->
        <livewire:client.product.gallery :coverImage="$product->coverImage" :productId="$product->id" :images="$product->images"/>
        <!-- === Title & Details === -->
        <livewire:client.product.details :name="$product->name" />
        <!-- === Seller Detail === -->
        <livewire:client.product.buy-box :sellerName="$product->seller->name" :productId="$product->id" :price="$product->price" :disocunt="$product->discount" :finalPrice="$product->finalPrice"/>
    </section>

    <!-- ====== Seller ====== -->
    <livewire:client.product.sellers/>

    <!-- ====== Product more Details ====== -->
    <livewire:client.product.tabs :sellerName="$product->seller->name" :name="$product->name" :productId="$product->id" />

    @push('script')
        <script src="/client/js/product.js"></script>
    @endpush
</div>
