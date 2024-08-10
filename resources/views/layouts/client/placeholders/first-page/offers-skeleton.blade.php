<div>
    <style>
        .skeleton-offers-slider {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 10px;
            gap: 10px;
        }

        /* Skeleton loader styles */
        .skeleton-offers-slider .skeleton {
            background: #e0e0e0; /* Light grey color for skeleton */
            border-radius: 4px;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }

        /* Animation for skeleton loader */
        .skeleton-offers-slider .skeleton::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .skeleton-offers-slider .skeleton-img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .skeleton-offers-slider .skeleton-text {
            width: 100px;
            height: 20px;
            margin-bottom: 10px;
        }

        .skeleton-offers-slider .skeleton-price {
            width: 80px;
            height: 20px;
            margin-bottom: 5px;
        }

        .skeleton-offers-slider .skeleton-del {
            width: 50px;
            height: 15px;
        }

        .skeleton-offers-slider .skeleton-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border: 1px solid #e0e0e0;
            background-color: #fff;
            min-width: 180px;
        }
    </style>
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
                <div class="skeleton-offers-slider">
                    <div class="skeleton-item">
                        <div class="skeleton skeleton-img"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-price"></div>
                        <div class="skeleton skeleton-del"></div>
                    </div>

                    <div class="skeleton-item">
                        <div class="skeleton skeleton-img"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-price"></div>
                        <div class="skeleton skeleton-del"></div>
                    </div>

                    <div class="skeleton-item">
                        <div class="skeleton skeleton-img"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-price"></div>
                        <div class="skeleton skeleton-del"></div>
                    </div>

                    <div class="skeleton-item">
                        <div class="skeleton skeleton-img"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-price"></div>
                        <div class="skeleton skeleton-del"></div>
                    </div>
                    <div class="skeleton-item">
                        <div class="skeleton skeleton-img"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-price"></div>
                        <div class="skeleton skeleton-del"></div>
                    </div>
                    <div class="skeleton-item">
                        <div class="skeleton skeleton-img"></div>
                        <div class="skeleton skeleton-text"></div>
                        <div class="skeleton skeleton-price"></div>
                        <div class="skeleton skeleton-del"></div>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</div>
