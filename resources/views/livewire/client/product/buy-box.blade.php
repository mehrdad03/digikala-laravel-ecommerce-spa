<div class="col p-0 p-lg-auto col-lg-3 mt-5 mt-lg-0 seller">
    <div class="bg-light border rounded-4 p-3 p-lg-3 mb-3">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="fw-bold">فروشنده</h6>
            <p class="text-info fs-8">3 فروشنده دیگر</p>
        </div>

        <!-- market name and score -->
        <div class="d-flex gap-4 mx-lg-5 mx-3">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-shop"
                viewBox="0 0 16 16">
                <path
                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
            </svg>
            <div>
                <div class="d-flex my-3">
                    <p>{{$sellerName}}</p>
                    <p class="text-success fs-8 fw-medium pe-3">منتخب</p>
                </div>
                <div class="d-flex gap-3 justify-content-center fs-8">
                    <p class="text-secondary"><span class="text-warning">77.6%</span> رضایت از کالا</p>
                    <p class="text-secondary">عملکرد <span class="text-success">عالی</span></p>
                </div>
            </div>
        </div>

        <hr/>

        <!-- discount & price-->
        <div class="d-none d-lg-flex justify-content-between align-items-center">
            <!-- Tooltip -->
            <button
                type="button"
                class="bg-transparent border-0"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                title="این کالا توسط فروشنده آن قیمت گذاری شده">
                <svg
                    width="20"
                    height="20"
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

            <div>
                <div class="d-flex gap-3">
                    <p class="text-secondary fs-8"><s>{{number_format($price)}}</s></p>
                    <span class="bg-danger text-white fs-8 px-2 py-1 rounded-5">{{$disocunt}}%</span>
                </div>
                <p class="fw-bold mt-3">{{number_format($finalPrice)}}<span class="fs-8">تومان</span></p>
            </div>
        </div>

        <!-- text slider -->
        <div class="d-none d-lg-block slider">
            <p class="active text-danger fs-8 fw-medium">❤️ ۵۰۰+ نفر به این کالا علاقه دارند</p>
            <p class="text-success fs-8 fw-medium">🤩 بهترین قیمت در ۳۰ روز گذشته</p>
            <p class="text-success fs-8 fw-medium">🧺 در سبد خرید ۱۰۰۰+ نفر</p>
        </div>

        <!-- buy btn -->

        @if(\Illuminate\Support\Facades\Auth::check())
            @if(!$inCart)
                <button wire:click="addToCart"
                        class="d-none d-lg-block bg-danger w-100 rounded-2 border-0 mt-3 py-3 text-center text-white fs-8">
                    <span wire:loading.remove="addToCart"> افزودن به سبد خرید</span>
                    <div wire:loading="addToCart" class="loader"></div>

                </button>

            @else

                <button
                    class="d-none d-lg-block bg-info w-100 rounded-2 border-0 mt-3 py-3 text-center text-white fs-8">
                    موجود در سبد خرید
                    <a href="" class="text-secondary">سبد خرید</a>
                </button>

            @endif

        @else
            <a href="{{route('client.auth.index')}}"
               class="d-none d-lg-block bg-danger w-100 rounded-2 border-0 mt-3 py-3 text-center text-white fs-8">
                افزودن به سبد خرید
            </a>
        @endif




        <!-- Warranty Text -->
        <p class="mt-3 fs-8">
            <svg
                width="18"
                height="18"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="ms-3">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z"/>
            </svg>
            گارانتی ۱۸ ماهه پیشتازان فناوری سیب طلایی (سی تلکام)
        </p>

        <hr/>

        <button
            class="w-100 border-0 bg-transparent my-2 d-flex justify-content-between"
            data-bs-toggle="modal"
            data-bs-target="#myModal">
            <div class="text-end">
                <p class="text-secondary fs-8 mb-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-truck text-danger"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                    </svg>
                    ارسال دیجی‌کالا
                </p>
                <p class="text-secondary fs-8">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-speedometer text-info"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                        <path
                            fill-rule="evenodd"
                            d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
                    </svg>
                    ارسال امروز
                    <span class="fw-light">(فعلا در شهر تهران و کرج)</span>
                </p>
            </div>
            <svg
                width="23"
                height="23"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="text-secondary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
            </svg>
        </button>

        <!-- The Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="false">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="myModalLabel">جزئیات ارسال</h6>
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="fw-bold">ارسال دیجی‌کالا</h6>
                        <p class="fs-8">
                            این کالا در انبار دیجی‌کالا موجود و آماده پردازش است و توسط پیک دیجی‌کالا در بازه
                            انتخابی ارسال
                            خواهد شد.
                        </p>
                        <h6 class="fw-bold mt-5">ارسال امروز (فعلا در شهر تهران و کرج)</h6>
                        <p class="fs-8 mb-4">
                            اگر سفارش را قبل از ساعت ۶ عصر ثبت کنید، همان روز ارسال می‌شود. در صورت ثبت سفارش
                            بعد از ساعت ۶
                            عصر، فردا ارسال خواهد شد.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr/>

        <!-- Digiclub Score -->
        <div class="d-flex align-items-center gap-2">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="18"
                fill="currentColor"
                class="bi bi-coin text-warning"
                viewBox="0 0 16 16">
                <path
                    d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
            </svg>
            <p class="fs-8 mt-1 fw-semibold">150 امتیاز دیجی‌کلاب</p>
            <!-- Tooltip -->
            <button
                type="button"
                class="bg-transparent border-0 mt-1"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                title="بعد از پایان مهلت مرجوعی،برای دریافت امتیاز به صفحه ماموریت های کلابی سر بزنید">
                <svg
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="text-secondary">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"/>
                </svg>
            </button>
        </div>

        <hr/>

        <!-- Cancellation of purchase (mobile)  -->
        <div class="d-block d-lg-none gap-4 mb-5 mb-lg-0 mt-4">
            <div class="d-flex gap-2">
                <svg
                    width="18"
                    height="18"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="text-secondary">
                    <path
                        fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd"/>
                </svg>
                <p class="fs-8 w-100 text-secondary">
                    امکان برگشت کالا در گروه موبایل با دلیل "انصراف از خرید" تنها در صورتی مورد قبول است که پلمب
                    کالا باز
                    نشده باشد. تمام گوشی‌های دیجی‌کالا ضمانت رجیستری دارند. در صورت وجود مشکل رجیستری، می‌توانید
                    بعد از
                    مهلت قانونی ۳۰ روزه، گوشی خریداری‌شده را مرجوع کنید.
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <div class="d-flex align-items-center gap-2 text-secondary-emphasis">
                    <p class="fs-9">گزارش نادرستی مشخصات</p>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <a
        href="#"
        class="border rounded-2 p-3 d-flex align-items-center justify-content-between bg-white mb-3 mb-lg-0">
        <p class="text-secondary fs-8">
            <svg
                width="16"
                height="16"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="text-secondary ms-1">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"/>
            </svg>
            قیمت‌گذاری و نظارت بر قیمت
        </p>
        <svg
            width="16"
            heigth="16"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="text-secondary">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
        </svg>
    </a>

    <div class="px-4 d-flex d-lg-none flex-column align-content-center justify-content-center mb-3">
        <div class="bg-white d-flex align-items-center justify-content-between px-3">
            <p>ارسال رایگان برای این کالا</p>
            <img src="/client/assets/Product/free-delivery.svg" alt="free delivery"/>
        </div>
        <div class="bg-white px-3">
            <div class="d-flex align-items-center justify-content-between">
                <p>با استفاده از تسهیلات دیجی‌پی</p>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2.5"
                    stroke="currentColor"
                    class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
                </svg>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="text-primary fs-5">&bull;</span>
                <p class="text-secondary">۲,۸۲۲,۳۰۰ تومان ماهانه (۱۲ ماه)</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="text-primary fs-5">&bull;</span>
                <p class="text-secondary">اعتبار تا سقف ۳۰,۰۰۰,۰۰۰ تومان</p>
            </div>
        </div>
    </div>
</div>
