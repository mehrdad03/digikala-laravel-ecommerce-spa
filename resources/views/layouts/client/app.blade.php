<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     @include('layouts.client.client-links')

    <title>Digikala</title>
</head>
<body>

<livewire:client.header.index/>

<main>
    <!-- === mobile menu === -->
    <div
            class="fixed-bottom d-flex justify-content-around d-md-none border-top bg-white py-2">
        <a
                href="#"
                class="text-black d-flex justify-content-center align-items-center flex-column gap-1">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-house-fill"
                    viewBox="0 0 16 16">
                <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                <path
                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
            </svg>
            <p class="fs-9">خانه</p>
        </a>
        <a
                href="#"
                class="text-secondary d-flex justify-content-center align-items-center flex-column gap-1">
            <svg
                    width="25"
                    height="25"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z"/>
            </svg>
            <p class="fs-9">دسته بندی</p>
        </a>
        <a
                href="#"
                class="text-secondary d-flex justify-content-center align-items-center flex-column gap-1">
            <svg
                    width="25"
                    height="25"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
            </svg>
            <p class="fs-9">سبد خرید</p>
        </a>
        <a
                href="#"
                class="text-secondary d-flex justify-content-center align-items-center flex-column gap-1">
            <svg
                    width="25"
                    height="25"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6">
                <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
            </svg>

            <p class="fs-9">دیجی‌کالای من</p>
        </a>
    </div>

    {{$slot}}

</main>

<!-- === Footer === -->
<footer class="mt-5 border-top pt-5">
    <div class="container px-lg-5">
        <div
            class="d-none d-lg-flex align-items-center justify-content-between">
            <img width="100" src="/client/assets/digi.svg" alt="digi"/>
            <button
                type="button"
                class="btn btn-outline-secondary fs-8"
                onclick="window.scrollTo(0,0)">
                بازگشت به بالا
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
                        d="m4.5 15.75 7.5-7.5 7.5 7.5"/>
                </svg>
            </button>
        </div>
        <!-- mobile scroll to top -->
        <div class="w-100 d-flex d-lg-none justify-content-center">
            <button
                class="border-0 bg-transparent text-info fs-9"
                onclick="window.scrollTo(0,0)">
                بازگشت به بالا
                <svg
                    width="14"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="me-2">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m4.5 15.75 7.5-7.5 7.5 7.5"/>
                </svg>
            </button>
        </div>

        <!-- mobile call support -->
        <div
            class="d-flex d-lg-none align-items-center justify-content-between mt-4">
            <div class="d-flex align-items-center gap-3">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi bi-headset"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
                </svg>
                <div>
                    <p class="fs-9 fw-light">۷ روز هفته، ۲۴ ساعت</p>
                    <p class="fs-8 fw-bold mt-2">تماس با پشتیبانی</p>
                </div>
            </div>
            <button class="btn btn-outline-dark fs-9 fw-medium">تماس</button>
        </div>
        <!-- mobile Download app -->
        <div
            class="d-flex d-lg-none align-items-center justify-content-between mt-4">
            <div class="d-flex align-items-center gap-2">
                <img
                    src="/client/assets/footer/footerlogo2.webp"
                    alt="digi kala logo"
                    width="40"/>
                <div>
                    <p class="fs-9 fw-light">تجربه خرید بهتر در</p>
                    <p class="fs-8 fw-bold mt-2">اپلیکیشن دیجی‌کالا</p>
                </div>
            </div>
            <button class="btn btn-dark fs-9 fw-medium">دانلود</button>
        </div>

        <!-- mobile faq -->
        <div
            class="accordion accordion-flush mt-4 d-block d-lg-none"
            id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed fs-9"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne"
                        aria-expanded="false"
                        aria-controls="flush-collapseOne">
                        با دیجی‌کالا
                    </button>
                </h2>
                <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the
                        first item's accordion body.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed fs-9"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo"
                        aria-expanded="false"
                        aria-controls="flush-collapseTwo">
                        خدمات مشتریان
                    </button>
                </h2>
                <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the
                        second item's accordion body. Let's imagine this being filled
                        with some actual content.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed fs-9"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree"
                        aria-expanded="false"
                        aria-controls="flush-collapseThree">
                        راهنمای خرید از دیجی‌کالا
                    </button>
                </h2>
                <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the
                        third item's accordion body. Nothing more exciting happening
                        here in terms of content, but just filling up the space to make
                        it look, at least at first glance, a bit more representative of
                        how this would look in a real-world application.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button
                        class="accordion-button collapsed fs-9"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour"
                        aria-expanded="false"
                        aria-controls="flush-collapseFour">
                        شرکای تجاری
                    </button>
                </h2>
                <div
                    id="flush-collapseFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the
                        third item's accordion body. Nothing more exciting happening
                        here in terms of content, but just filling up the space to make
                        it look, at least at first glance, a bit more representative of
                        how this would look in a real-world application.
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 fs-8 d-none d-lg-block">
            <span>تلفن پشتیبانی 02161930000</span>
            <span>&nbsp;&nbsp;</span>
            |
            <span>&nbsp;&nbsp;</span>
            <span> 7 روز هفته، 24 ساعته پاسخگوی شما هستیم</span>
        </div>

        <div
            class="container d-none d-lg-flex align-items-center justify-content-between flex-wrap gap-5 mt-5">
            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/express-delivery.svg"
                    alt="icons"/>
                <p class="text-center fs-8 fw-medium">امکان تحویل اکسپرس</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/cash-on-delivery.svg"
                    alt="icons"/>
                <p class="text-center fs-8 fw-medium">امکان پرداخت در محل</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/support.svg"
                    alt="icons"/>
                <p class="text-center fs-8 fw-medium">7 روز هفته، 24 ساعته</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/days-return.svg"
                    alt="icons"/>
                <p class="text-center fs-8 fw-medium">هفت روز ضمانت بازگشت کالا</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/original-products.svg"
                    alt="icons"/>
                <p class="text-center fs-8 fw-medium">ضمانت اصل بودن کالا</p>
            </div>
        </div>

        <div class="d-none d-lg-flex row my-5">
            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="my-3">با دیجی‌کالا</h6>
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">اتاق خبر دیجی کالا</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">فروش در دیجی کالا</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">فرصت های شغلی</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">گزارش تخلف در دیجی کالا</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">تماس با دیجی کالا</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">درباره دیجی کالا</p></a
                >
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="my-3">خدمات مشتریان</h6>
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">پاسخ به پرسش های متداول</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">رویه های بازگرداندن کالا</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">شرایط استفاده</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">حریم خصوصی</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">گزارش باگ</p></a
                >
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="my-3">راهنمای خرید از دیجی کالا</h6>
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">نحوه ثبت سفارش</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">رویه ارسال سفارش</p></a
                >
                <a href="#" class="text-black-50 fs-7"
                ><p class="my-2">شیوه های پرداخت</p></a
                >
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <h6 class="my-3">همراه ما باشید!</h6>
                <div class="d-flex flex-wrap align-items-center gap-5">
                    <a href="#" class="text-black-50">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            fill="currentColor"
                            class="bi bi-instagram"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                    <a href="#" class="text-black-50">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            fill="currentColor"
                            class="bi bi-twitter"
                            viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                        </svg>
                    </a>
                    <a href="#" class="text-black-50">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            fill="currentColor"
                            class="bi bi-linkedin"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-black-50">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            fill="currentColor"
                            class="bi bi-youtube"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                        </svg>
                    </a>
                </div>
                <h6 class="mt-4">با ثبت ایمیل، از جدیدترین تخفیف ها باخبر شوید</h6>
                <form action="#" method="post">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="ایمیل شما"
                        class="border px-3 py-2 rounded-2 fs-8"/>
                    <button
                        class="btn btn-outline-secondary"
                        type="submit"
                        id="email">
                        ثبت
                    </button>
                </form>
            </div>
        </div>

        <!-- Download Application  -->
        <div
            class="d-none d-lg-flex row flex-column flex-lg-row align-items-center justify-content-between p-lg-4 p-2 rounded-3"
            style="background-color: #3c4b6d">
            <div class="col-6 d-flex align-items-center gap-3">
                <img
                    width="60"
                    src="/client/assets/footer/footerlogo2.webp"
                    alt="icondigi"/>
                <h5 class="text-white">دانلود اپلیکیشن دیجی کالا</h5>
            </div>

            <div class="col-6 d-flex flex-wrap align-items-center gap-5">
                <div>
                    <img src="/client/assets/footer/coffe-bazzar.svg" alt="bazar"/>
                </div>
                <div>
                    <img src="/client/assets/footer/myket.svg" alt="myket"/>
                </div>
                <div>
                    <img src="/client/assets/footer/sib-app.svg" alt="sib"/>
                </div>
                <div class="bg-white p-3 rounded-3">
                    <img src="/client/assets/footer/More.svg" alt="more"/>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-flex row mt-5">
            <div class="col-12 col-lg-6">
                <h5 class="text-secondary my-3">
                    فروشگاه اینترنتی دیجی کالا، بررسی، انتخاب و خرید آنلاین
                </h5>
                <p class="text-wrap text-black-50">
                    اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع،
                    باکیفیت و دارای قیمت مناسب را در مدت زمانی کوتاه به دست مشتریان
                    خود برساند و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی که
                    فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و
                    توانسته از این طریق مشتریان ثابت خود را داشته باشد.
                </p>
                <a href="#" class="text-info">
                    <p class="fs-8 mt-2">
                        مشاهده بیشتر
                        <svg
                            width="14"
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
                </a>
            </div>

            <div
                class="col-12 col-lg-6 d-flex flex-wrap align-items-center mt-3 justify-content-end gap-lg-5 gap-3">
                <div class="border p-3 rounded">
                    <img width="80" src="/client/assets/footer/rezi.webp" alt=""/>
                </div>
                <div class="border p-3 rounded">
                    <img width="60" src="/client/assets/footer/kasbokar.webp" alt="logo"/>
                </div>
                <div class="border p-3 rounded">
                    <img
                        width="70"
                        src="/client/assets/footer/footerlogo2.webp"
                        alt="logo"/>
                </div>
            </div>
        </div>

        <!-- copyrights -->
        <p class="fw-light my-lg-5 copyright text-center text-secondary">
            برای استفاده از مطالب دیجی‌کالا، داشتن «هدف غیرتجاری» و ذکر «منبع»
            کافیست. تمام حقوق اين وب‌سايت نیز برای شرکت نوآوران فن آوازه (فروشگاه
            آنلاین دیجی‌کالا) است.
        </p>
    </div>

    <div class="subBrand px-5 d-lg-block d-none bg-secondary-subtle">
        <div class="d-flex align-items-center justify-content-center w-100">
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/1.svg" width="100" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/2.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/3.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/4.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/5.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/6.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/7.svg" width="140" alt="brand"/>
            </a>
            <a href="#">
                <img src="/client/assets/footer/brands/8.svg" width="140" alt="brand"/>
            </a>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/9.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/10.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/11.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/12.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/13.svg" width="140" alt="brand"/>
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/14.svg" width="140" alt="brand"/>
            </a>
            <a href="#">
                <img src="/client/assets/footer/brands/15.svg" width="140" alt="brand"/>
            </a>
        </div>
    </div>
</footer>

@include('layouts.client.client-scripts')

</body>
</html>
