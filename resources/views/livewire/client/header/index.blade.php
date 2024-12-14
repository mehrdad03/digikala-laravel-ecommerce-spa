<div>
    <header class="container-fluid border-bottom" id="desktop-main-header">
        <!-- === Search box and login btn === -->
        <div class="row py-4 mx-lg-4">
            <div class="col-12 col-lg-8 d-flex align-items-center column-gap-2">
                <!-- Desktop Logo -->
                <img src="/client/assets/logo.svg" alt="logo" class="d-none d-lg-block"/>
                <div class="bg-secondary-subtle py-1 px-4 searchInput rounded searchInput d-flex align-items-center">
                    <!-- search icon -->
                    <div>
                        <svg
                            class="text-secondary"
                            width="20"
                            height="20"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                        </svg>
                    </div>
                    <!-- mobile search -->
                    <input
                        type="text"
                        style="width: 57px;"
                        class="d-block d-lg-none bg-transparent border-0 py-2"
                        placeholder="جستجو در"
                        readonly/>
                    <!-- desktop search input -->
                    <button
                        type="button"
                        class="bg-transparent d-none d-lg-block my-2 border-0 fs-8 text-secondary w-100 text-end"
                        data-bs-toggle="modal"
                        data-bs-target="#desktopSearchBox">
                        جستجو
                    </button>

                    <img
                        src="/client/assets/digi.svg"
                        alt="digikala logo"
                        width="80"
                        class="d-block d-lg-none"/>
                </div>

                <!-- Mobile Modal Search Box -->
                <div
                    id="mSearchBox"
                    class="bg-white w-100 h-100 pt-4 justify-content-center align-items-start">
                    <button class="bg-transparent border-0 btn-outline-0">
                        <svg
                            width="15"
                            height="15"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                        </svg>
                    </button>
                    <input type="text" placeholder="جستجو"/>
                </div>
            </div>
            <!-- login & cart -->
            <div
                class="col-lg-4 d-none d-lg-flex justify-content-end align-items-center">
                <a
                    href="{{route('client.auth.index')}}" wire:navigate
                    class="d-flex align-items-center gap-2 text-black fs-8 border border-secondary-subtle rounded px-3 py-2">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        {{auth()->user()->name}}
                    @else
                        <span>
              <svg
                  width="20"
                  height="20"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75"/>
              </svg>
            </span>
                        <p class="fw-medium">ورود | ثبت‌نام</p>
                    @endif
                </a>
                <div class="pip"></div>
                <span class="cart">

                    <span class="cart-count bg-danger rounded-1">{{$cart}}</span>
            <svg
                width="28"
                height="28"
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
          </span>
            </div>
        </div>
        <!-- Desktop Search Modal Box -->
        <div
            class="modal"
            id="desktopSearchBox"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div
                        class="modal-header mx-0 border-bottom border-info justify-content-start gap-2">
                        <svg
                            width="20"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="text-secondary">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                        </svg>
                        <input
                            type="text"
                            placeholder="جستجو"
                            id="searchInput"
                            class="form-control fs-9 text-secondary border-0 mx-0 w-100 pe-2 py-2"/>
                        <button class="bg-transparent border-0 clear-btn" id="clearBtn">
                            <svg
                                width="20"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="size-6">
                                <path
                                    fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- ** cleared search ** -->
                        <div id="clean">
                            <!-- ads banner -->
                            <a href="#">
                                <img
                                    src="/client/assets/header/headerAds.webp"
                                    alt="ads"
                                    class="w-100 rounded-3"/>
                            </a>

                            <!-- last search -->
                            <div class="my-4">
                                <div
                                    class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg
                                            width="20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="text-secondary">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        <p class="fw-bold fs-8">آخرین جستجو‌های شما</p>
                                    </div>
                                    <button class="bg-transparent border-0">
                                        <svg
                                            width="20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="text-secondary">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                        </svg>
                                    </button>
                                </div>
                                <!-- search -->
                                <div class="swiper myHeaderSearchSwiper mt-2">
                                    <div class="swiper-wrapper py-2">
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr/>

                            <!-- most searched -->
                            <div class="my-4">
                                <div class="d-flex align-items-center gap-2">
                                    <svg
                                        width="20"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="text-secondary">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z"/>
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z"/>
                                    </svg>

                                    <p class="fw-bold fs-8">جستجو‌های پرطرفدار</p>
                                </div>

                                <div class="swiper myHeaderSearchSwiper mt-2">
                                    <div class="swiper-wrapper py-2">
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <div class="swiper-slide">
                                            <button
                                                type="button"
                                                class="bg-white d-flex flex-nowrap align-items-center gap-2 rounded-5 border py-2 px-2">
                                                <p class="fs-8 fw-medium">iPhone 13</p>
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
                                            </button>
                                        </div>
                                        <!-- Repeat swiper-slide as needed -->
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- === Menu and Loaction === -->
        <div class="d-none d-lg-flex row mt-2">
            <div class="col-10">
                <ul class="d-flex align-items-center gap-3">
                    <li class="has-submenu">
                        <div class="menu fs-8">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                            </svg>

                            دسته‌بندی‌کالاها
                        </div>
                        <div class="mega-menu submenu">
                            <div class="menu-list">
                                <ul>
                                    <li data-target="cat-1">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-laptop"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                                        </svg>
                                        کالای دیجیتال
                                    </li>
                                    <li data-target="cat-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-brush"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z"/>
                                        </svg>
                                        آرایشی بهداشتی
                                    </li>
                                    <li data-target="cat-3">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-house-door"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                                        </svg>
                                        خانه و آشپزخانه
                                    </li>
                                    <li data-target="cat-4">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-scooter"
                                            viewBox="0 0 16 16">
                                            <path
                                                fill-rule="evenodd"
                                                d="M9 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-.39l1.4 7a2.5 2.5 0 1 1-.98.195l-.189-.938-2.43 3.527A.5.5 0 0 1 9.5 13H4.95a2.5 2.5 0 1 1 0-1h4.287l2.831-4.11L11.09 3H9.5a.5.5 0 0 1-.5-.5M3.915 12a1.5 1.5 0 1 0 0 1H2.5a.5.5 0 0 1 0-1zm8.817-.789A1.499 1.499 0 0 0 13.5 14a1.5 1.5 0 0 0 .213-2.985l.277 1.387a.5.5 0 0 1-.98.196z"/>
                                        </svg>
                                        ورزش و سفر
                                    </li>
                                    <li data-target="cat-5">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-person-standing-dress"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z"/>
                                        </svg>
                                        مد و پوشاک
                                    </li>
                                    <li data-target="cat-6">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-pen"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                                        </svg>
                                        لوازم تحریر
                                    </li>
                                    <li data-target="cat-7">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-book"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                                        </svg>
                                        کتاب، لوازم تحریر و هنر
                                    </li>
                                    <li data-target="cat-8">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-bucket"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5m1.005 0a4.5 4.5 0 0 1 8.945 0zm9.892 1-1.286 8.574a.5.5 0 0 1-.494.426H4.36a.5.5 0 0 1-.494-.426L2.58 6h10.838z"/>
                                        </svg>
                                        اسباب بازی و کودک
                                    </li>
                                    <li data-target="cat-9">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-tools"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                        </svg>
                                        خودرو و ابزار و اداری
                                    </li>
                                </ul>
                            </div>
                            <div class="categorys">
                                <div class="category cat-1 active">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های کالای دیجیتال
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-2">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های آرایشی بهداشتی
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-3">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های خانه و آشپزخانه
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-4">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های ورزش و سفر
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-5">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های مد و پوشاک
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-6">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های لوازم تحریر
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-7">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های کتاب، لوازم تحریر و هنر
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-8">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های اسباب بازی و کودک
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category cat-9">
                                    <div class="category-header">
                                        <p>
                                            همه ی دسته بندی های خودرو ابزار و اداری
                                            <svg
                                                width="16"
                                                height="16"
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
                                    <div class="items">
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                                <li class="header">
                                                    هدر آیتم
                                                    <svg
                                                        width="16"
                                                        height="16"
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
                                                </li>
                                                <li>آیتم</li>
                                                <li>آیتم</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                <span>
                  <svg
                      width="15"
                      height="15"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                  </svg>
                </span>
                            <p class="fs-8">شگفت‌انگیزها</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                <span>
                  <svg
                      width="15"
                      height="15"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z"/>
                  </svg>
                </span>
                            <p class="fs-8">سوپرمارکت</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                <span>
                  <svg
                      width="15"
                      height="15"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 0 0 4.875-4.875V12m6.375 5.25a4.875 4.875 0 0 1-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 0 0 1.5-1.5V5.25a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v13.5a1.5 1.5 0 0 0 1.5 1.5Zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 0 1 3.182 3.182ZM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 1 1 3.182-3.182Z"/>
                  </svg>
                </span>
                            <p class="fs-8">کارت هدیه</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                <span>
                  <svg
                      width="15"
                      height="15"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z"/>
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z"/>
                  </svg>
                </span>
                            <p class="fs-8">پرفروش‌ترین‌ها</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                <span>
                  <svg
                      width="15"
                      height="15"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="size-6">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9.568 3h6.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"/>
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 6h.008v.008H6V6Z"/>
                  </svg>
                </span>
                            <p class="fs-8">تخفیف‌هاوپیشنهادها</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                    <!-- Do you have question -->
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                            <p class="fs-8">سوالی دارید؟</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                    <!-- sell on digikala -->
                    <li class="d-flex flex-column overflow-hidden">
                        <a href="#" class="d-flex align-items-center gap-1 text-black-50">
                            <p class="fs-8">در دیجی‌کالا بفروشید!</p>
                        </a>
                        <span
                            class="border-bottom border-danger w-100 navLinkHoverAnimation"></span>
                    </li>
                </ul>
            </div>
            <div class="col-2 d-flex align-items-center gap-2 justify-content-end">
          <span>
            <svg
                width="20"
                height="20"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6">
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
            </svg>
          </span>
                <p class="fs-8 text-secondary">لطفا شهر خود را انتخاب کنید</p>
            </div>
        </div>
    </header>
</div>
