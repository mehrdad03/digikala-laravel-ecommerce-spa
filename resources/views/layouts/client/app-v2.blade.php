<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! SEO::generate() !!}
    <link rel="stylesheet" href="/client/assets-v2/css/fontawesome.css"/>
    <link rel="stylesheet" href="/client/assets-v2/css/main.css"/>
    @stack('link')
    @php
        $routeName=\Illuminate\Support\Facades\Route::currentRouteName();
    @endphp

</head>
<body>

@if($routeName!='client.shipping')
    <!-- Header -->
    <header class="header">
        <div class="container pt-2 pb-2">
            <div class="d-flex">
                <!-- right -->
                <div class="header__right w-50 d-flex align-items-center">
                    <div class="header__logo-container d-md-none d-sm-none">
                        <img
                            class="header__logo"
                            src="/client/assets-v2/images/full-horizontal.svg"
                            alt=""
                        />
                    </div>
                    <div class="header__search-container">
                        <input type="text" class="header__search" placeholder="جستجو"/>
                        <i class="fa-light fa-magnifying-glass"></i>

                        <!-- Mobile logo -->
                        <div class="header__logo-mobile d-lg-none">
                            <img src="/client/assets-v2/images/typography.svg" alt=""/>
                        </div>
                    </div>
                </div>
                <!-- left -->
                <div
                    class="header__left w-50 d-flex justify-content-end align-items-center d-md-none d-sm-none"
                >
                    <!-- Register btn Before login -->
                    <a href="#" class="header__auth-btn">
                        <i class="fa-light fa-arrow-left-from-bracket"></i>
                        ورود | ثبت نام
                    </a>

                    <!-- cart -->
                    <a href="" class="header__cart">
                        <i class="fa-light fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
            <nav class="navbar mt-4 d-flex align-items-center d-sm-none d-md-none">
                <div class="w-75">
                    <ul class="navbar__item-container d-flex align-items-center">
                        <li class="navbar__item">
                            <a href="#" class="ml-4 d-flex align-items-center">
                                <i class="fa-light fa-bars ml-2"></i>
                                دسته بندی کالاها
                            </a>
                        </li>

                        <li class="navbar__item">
                            <a href="#" class="ml-4 d-flex align-items-center">
                                <i class="fa-light fa-badge-percent ml-2"></i>
                                شگفت انگیز ها
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a href="#" class="ml-4 d-flex align-items-center">
                                <i class="fa-light fa-basket-shopping ml-2"></i>
                                سوپرمارکت
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a href="#" class="ml-4"
                            ><i class="fa-light fa-gift-card ml-2"></i>
                                کارت هدیه
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a href="#" class="ml-4 d-flex align-items-center">
                                <i class="fa-light fa-fire ml-2"></i>
                                پروفروش ترین ها
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a href="#" class="ml-4 d-flex align-items-center">
                                <i class="fa-light fa-hundred-points ml-2"></i>
                                تخفیف ها و پیشنهادها
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-25 d-flex align-items-center justify-content-end">
                    <button class="navbar__location">
                        <i class="fa-light fa-location-dot"></i>
                        لطفا شهر خود را انتخاب کنید
                    </button>
                </div>
            </nav>
            <!-- <nav class="navbar-mobile d-lg-none">
            <a href="" class="navbar-mobile__item">
              <i class="fa-light fa-house"></i>
              <p>خانه</p>
            </a>
            <a href="" class="navbar-mobile__item">
              <i class="fa-light fa-layer-group"></i>
              <p>دسته بندی</p>
            </a>
            <a href="" class="navbar-mobile__item">
              <i class="fa-light fa-cart-shopping"></i>
              <p>سبد خرید</p>
            </a>
            <a href="" class="navbar-mobile__item">
              <i class="fa-brands fa-google-play"></i>
              <p>مگ نت</p>
            </a>
            <a href="" class="navbar-mobile__item">
              <i class="fa-light fa-user"></i>
              <p>دیجی کالای من</p>
            </a>
          </nav> -->
        </div>
    </header>
@endif


<main class="container-md">

    {{$slot}}

</main>
@if($routeName!='client.shipping')
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="mt-5 mb-5">
                <!-- up -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="footer__logo-container">
                        <img
                            class="footer__logo"
                            src="/client/assets-v2/images/full-horizontal.svg"
                            alt=""
                        />
                    </div>
                    <a href="#" class="footer__scrollToTop-btn"
                    >بازگشت به بالا
                        <i class="fa-light fa-chevron-up"></i>
                    </a>
                </div>
                <!-- bootom -->
                <div class="d-flex footer__contact">
                    <p class="footer__contact-item">تلفن پشتیبانی ۶۱۹۳۰۰۰۰ - ۰۲۱</p>
                    <p class="footer__contact-item">۰۲۱-۹۱۰۰۰۱۰۰</p>
                    <p class="footer__contact-item">
                        ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم
                    </p>
                </div>
            </div>
            <div
                class="mt-5 mb-5 d-flex align-items-center justify-content-around footer-features d-sm-none d-md-none"
            >
                <a href="#" class="d-block footer-features__item">
                    <div class="footer-features__img-container">
                        <img
                            src="/client/assets-v2/images/feature-1.svg"
                            class="footer-features__img"
                            alt=""
                        />
                    </div>
                    <p class="footer-features__title">اﻣﮑﺎن ﺗﺤﻮﯾﻞ اﮐﺴﭙﺮس</p>
                </a>
                <a href="#" class="d-block footer-features__item">
                    <div class="footer-features__img-container">
                        <img
                            src="/client/assets-v2/images/feature-2.svg"
                            class="footer-features__img"
                            alt=""
                        />
                    </div>
                    <p class="footer-features__title">امکان پرداخت در محل</p>
                </a>
                <a href="#" class="d-block footer-features__item">
                    <div class="footer-features__img-container">
                        <img
                            src="/client/assets-v2/images/feature-3.svg"
                            class="footer-features__img"
                            alt=""
                        />
                    </div>
                    <p class="footer-features__title">۷ روز ﻫﻔﺘﻪ، ۲۴ ﺳﺎﻋﺘﻪ</p>
                </a>
                <a href="#" class="d-block footer-features__item">
                    <div class="footer-features__img-container">
                        <img
                            src="/client/assets-v2/images/feature-4.svg"
                            class="footer-features__img"
                            alt=""
                        />
                    </div>
                    <p class="footer-features__title">هفت روز ضمانت بازگشت کالا</p>
                </a>
                <a href="#" class="d-block footer-features__item">
                    <div class="footer-features__img-container">
                        <img
                            src="/client/assets-v2/images/feature-5.svg"
                            class="footer-features__img"
                            alt=""
                        />
                    </div>
                    <p class="footer-features__title">ﺿﻤﺎﻧﺖ اﺻﻞ ﺑﻮدن ﮐﺎﻟﺎ</p>
                </a>
            </div>

            <div class="row footer__block">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <p class="mb-3 fs-5">با دیجی‌کالا</p>
                    <a class="d-block mb-3" href="#">اتاق خبر دیجی‌کالا</a>
                    <a class="d-block mb-3" href="#">فروش در دیجی‌کالا</a>
                    <a class="d-block mb-3" href="#">فرصت‌های شغلی</a>
                    <a class="d-block mb-3" href="#">گزارش تخلف در دیجی‌کالا</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <p class="mb-3 fs-5">فرصت‌های شغلی</p>
                    <a class="d-block mb-3" href="#">اتاق خبر دیجی‌کالا</a>
                    <a class="d-block mb-3" href="#">فروش در دیجی‌کالا</a>
                    <a class="d-block mb-3" href="#">فرصت‌های شغلی</a>
                    <a class="d-block mb-3" href="#">گزارش تخلف در دیجی‌کالا</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <p class="mb-3 fs-5">راهنمای خرید از دیجی‌کالا</p>
                    <a class="d-block mb-3" href="#">اتاق خبر دیجی‌کالا</a>
                    <a class="d-block mb-3" href="#">فروش در دیجی‌کالا</a>
                    <a class="d-block mb-3" href="#">فرصت‌های شغلی</a>
                    <a class="d-block mb-3" href="#">گزارش تخلف در دیجی‌کالا</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-contact-us">
                    <p class="fs-5 footer-contact-us__title">همراه ما باشید!</p>
                    <div
                        class="footer-contact-us_itm-container mt-3 mb-3 d-flex align-items-center justify-content-around"
                    >
                        <i class="footer-contact-us__item fa-brands fa-instagram"></i>
                        <i class="footer-contact-us__item fa-brands fa-youtube"></i>
                        <i class="footer-contact-us__item fa-brands fa-telegram"></i>
                        <i class="footer-contact-us__item fa-brands fa-twitter"></i>
                    </div>
                    <div class="footer-form">
                        <p class="footer-form__headline">
                            با ثبت ایمیل، از جدید‌ترین تخفیف‌ها با‌خبر شوید
                        </p>
                        <div
                            class="footer-form__container mt-3 d-flex justify-content-between align-items-center"
                        >
                            <input
                                class="footer-form__email"
                                type="text"
                                placeholder="راهنمای خرید از دیجی‌کالا"
                            />
                            <button class="footer-form__btn">ثبت</button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="footer-apps mt-5 mb-5 d-flex align-items-center justify-content-between"
            >
                <div class="d-flex footer-apps__right align-items-center">
                    <div class="footer-apps__img-container">
                        <img
                            class="footer-apps__img"
                            src="/client/assets-v2/images/footerlogo2.png"
                            alt=""
                        />
                    </div>
                    <p class="footer-apps__txt">دانلود اپلیکیشن دیجی‌کالا</p>
                </div>
                <div class="footer-apps__left d-flex">
                    <a href="#" class="footer-apps__item-container">
                        <img
                            class="footer-apps__img"
                            src="/client/assets-v2/images/sib-app.svg"
                            alt=""
                        />
                    </a>
                    <a href="#" class="footer-apps__item-container">
                        <img
                            class="footer-apps__img"
                            src="/client/assets-v2/images/coffe-bazzar.svg"
                            alt=""
                        />
                    </a>
                    <a href="#" class="footer-apps__item-container">
                        <img
                            class="footer-apps__img"
                            src="/client/assets-v2/images/myket.svg"
                            alt=""
                        />
                    </a>
                    <a href="#" class="footer-apps__item-container">
                        <img
                            class="footer-apps__img"
                            src="/client/assets-v2/images/more.svg"
                            alt=""
                        />
                    </a>
                </div>
            </div>

            <div class="d-flex mt-5 mb-5 footer-trust">
                <div class="footer-trust__right w-50">
                    <h1 class="footer-trust__seo-h1">
                        <strong
                        >فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</strong
                        >
                    </h1>
                    <p class="footer-trust__seo-description">
                        یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی
                        متنوع، باکیفیت و دارای قیمت مناسب را در مدت زمان ی کوتاه به دست
                        مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی
                        که فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و
                        توانسته از این طریق مشتریان ثابت خود را داشته باشد. یکی از
                        مهم‌ترین دغدغه‌های کاربران دیجی‌کالا یا هر فروشگاه‌ اینترنتی
                        دیگری، این است که کالای خریداری شده چه زمانی به دستشان می‌رسد.
                        دیجی‌کالا شیوه‌های مختلفی از ارسال را متناسب با فروشنده کالا،‌
                        مقصد کالا و همچنین نوع کالا در اختیار کاربران خود قرار می‌دهد. هر
                        یک از روش های ارسال دیجی کالا شرایط و ویژگی‌های خاص خود را دارند
                        که ممکن است گاهی برای کاربران جدید، مبهم و پیچیده به نظر برسند.
                    </p>
                </div>
                <div
                    class="d-flex mr-5 align-items-center footer-trust__left w-50 justify-content-end"
                >
                    <a href="#" class="footer-trust__item"
                    ><img
                            src="/client/assets-v2/images/rezi.webp"
                            alt=""
                            class="footer-trust__img"
                        /></a>
                    <a href="#" class="footer-trust__item"
                    ><img
                            src="/client/assets-v2/images/rezi.png"
                            alt=""
                            class="footer-trust__img"
                        /></a>
                    <a href="#" class="footer-trust__item"
                    ><img
                            src="/client/assets-v2/images/rezi.png"
                            alt=""
                            class="footer-trust__img"
                        /></a>
                </div>
            </div>
            <div class="footer-copyright">
                <p class="footer-copyright__text">
                    برای استفاده از مطالب دیجی‌کالا، داشتن «هدف غیرتجاری» و ذکر «منبع»
                    کافیست. تمام حقوق اين وب‌سايت نیز برای شرکت نوآوران فن آوازه
                    (فروشگاه آنلاین دیجی‌کالا) است.
                </p>
            </div>
        </div>
    </footer>
@endif

@stack('script')
</body>
</html>
