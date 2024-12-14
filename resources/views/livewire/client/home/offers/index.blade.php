<div x-intersect="initializeSwiper">
    <section
        class="container-fluid px-0 container-lg my-4 my-lg-0 py-lg-4 productSlider">
        <div
            class="productItems overflow-hidden d-flex flex-column flex-lg-row align-items-center bg-danger">
            <!-- Suggestion -->
            <div
                class="d-flex align-items-center justify-content-between gap-3 gap-lg-0 flex-lg-column Suggestion">
                <div
                    class="d-flex flex-row-reverse flex-lg-column align-items-center justify-content-between justify-content-lg-center my-3 mt-lg-3 mx-lg-5 gap-3">
                    <img
                        width="80"
                        src="/client/assets/productSlider/Amazings (1).svg"
                        class="d-none d-lg-block"
                        alt="slide-img"/>

                    <!-- timer -->
                    <div id="countdown" class="d-flex fw-bold" dir="ltr">
                        <span id="hours" class="fs-9 bg-white p-1 rounded-2">00</span>
                        <span class="colon text-white">:</span>
                        <span id="minutes" class="fs-9 bg-white p-1 rounded-2">00</span>
                        <span class="colon text-white">:</span>
                        <span id="seconds" class="fs-9 bg-white p-1 rounded-2">00</span>
                    </div>

                    <p class="d-lg-none text-white fw-bold fs-6">شگفت انگیز</p>

                    <img
                        width="80"
                        src="/client/assets/productSlider/Amazing.svg"
                        alt="slide-img"/>
                </div>
                <p class="text-white fs-9 text-center d-flex">
                    <span class="d-none d-lg-block">مشاهده &nbsp;</span> همه
                    <svg
                        width="18"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 19.5 8.25 12l7.5-7.5"/>
                    </svg>
                </p>
            </div>

            <div class="swiper mySwiper w-100" id="product">
                <div class="swiper-wrapper">
                    @foreach($featuredProducts as $item)
                        <a  href="{{route('client.product',$item->p_code)}}/{{$item->seo->slug}}" wire:navigate class="swiper-slide">
                            <div>
                                <img
                                    src="/products/{{$item->id}}/medium/{{@$item->coverImage->path}}"
                                    alt="slide-img"/>
                                <p class="fs-8 fw-bold ellipsis p-1">{{$item->name}}</p>
                            </div>
                            <div
                                class="d-flex align-items-center justify-content-around w-100">
                                <h6>{{$item->discount}}%</h6>
                                <div class="price mt-3">
                                    <p class="fs-8">
                                        {{number_format($item->finalPrice)}}
                                        <span class="fs-9 me-2">تومان</span>
                                    </p>
                                    <del class="beforeDiscount fs-9 text-end">{{number_format($item->price)}}</del>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</div>
