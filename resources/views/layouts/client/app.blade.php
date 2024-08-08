<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap css -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Main css -->
    <link rel="stylesheet" href="/client/css/main.css" />
    <title>Digikala</title>
</head>
<body>
<header class="container-fluid border-bottom" id="desktop-main-header">
    <!-- === Search box and login btn === -->
    <div class="row py-4 mx-lg-4">
        <div class="col-12 col-lg-8 d-flex align-items-center column-gap-2">
            <!-- Desktop Logo -->
            <img src="/client/assets/logo.svg" alt="logo" class="d-none d-lg-block" />
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
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
                <!-- mobile search -->
                <input
                    type="text"
                    style="width: 57px;"
                    class="d-block d-lg-none bg-transparent border-0 py-2"
                    placeholder="جستجو در"
                    readonly />
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
                    class="d-block d-lg-none" />
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
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
                <input type="text" placeholder="جستجو" />
            </div>
        </div>

        <!-- login & cart -->
        <div
            class="col-lg-4 d-none d-lg-flex justify-content-end align-items-center">
            <a
                href="/client/pages/login.html"
                class="d-flex align-items-center gap-2 text-black fs-8 border border-secondary-subtle rounded px-3 py-2">
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
                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
              </svg>
            </span>
                <p class="fw-medium">ورود | ثبت‌نام</p>
            </a>
            <div class="pip"></div>
            <span>
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
                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
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
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input
                        type="text"
                        placeholder="جستجو"
                        id="searchInput"
                        class="form-control fs-9 text-secondary border-0 mx-0 w-100 pe-2 py-2" />
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
                                clip-rule="evenodd" />
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
                                class="w-100 rounded-3" />
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
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

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
                                        d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
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
                                            d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
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
                                            d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z" />
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
                                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
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
                                            d="M9 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-.39l1.4 7a2.5 2.5 0 1 1-.98.195l-.189-.938-2.43 3.527A.5.5 0 0 1 9.5 13H4.95a2.5 2.5 0 1 1 0-1h4.287l2.831-4.11L11.09 3H9.5a.5.5 0 0 1-.5-.5M3.915 12a1.5 1.5 0 1 0 0 1H2.5a.5.5 0 0 1 0-1zm8.817-.789A1.499 1.499 0 0 0 13.5 14a1.5 1.5 0 0 0 .213-2.985l.277 1.387a.5.5 0 0 1-.98.196z" />
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
                                            d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
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
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
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
                                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
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
                                            d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5m1.005 0a4.5 4.5 0 0 1 8.945 0zm9.892 1-1.286 8.574a.5.5 0 0 1-.494.426H4.36a.5.5 0 0 1-.494-.426L2.58 6h10.838z" />
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
                                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
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
                        d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
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
                        d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 0 0 3.75-.615A2.993 2.993 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72l1.189-1.19A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72M6.75 18h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .414.336.75.75.75Z" />
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
                        d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 0 0 4.875-4.875V12m6.375 5.25a4.875 4.875 0 0 1-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 0 0 1.5-1.5V5.25a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v13.5a1.5 1.5 0 0 0 1.5 1.5Zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 0 1 3.182 3.182ZM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 1 1 3.182-3.182Z" />
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
                        d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
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
                        d="M9.568 3h6.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 6h.008v.008H6V6Z" />
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
        <div class="col-2 d-flex align-items-center gap-2">
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
                  d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
          </span>
            <p class="fs-8 text-secondary">لطفا شهر خود را انتخاب کنید</p>
        </div>
    </div>
</header>

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
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
            <path
                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
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
                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
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
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
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
                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>

        <p class="fs-9">دیجی‌کالای من</p>
    </a>
</div>

<!-- === Story section === -->
<section class="container-fluid p-0 container-lg mt-4 story">
    <div class="d-flex py-2 py-lg-5 py-md-3 justify-content-center align-items-center">
        <div class="swiper myStorySwiper px-0">
            <div class="swiper-wrapper">
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#">
                        <img width="80" src="/client/assets/story/sandal.jpeg" alt="story" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">انواع صندل</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#">
                        <img width="80" src="/client/assets/story/style.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">استایل جذاب</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#">
                        <img width="80" src="/client/assets/story/vaghtkharid.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">وقت خریده</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/perfume.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">عطرهای اصل</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/takhfif.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">تخفیف ویژه</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/cover.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">کاور گوشی</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/tamiz.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">لباس تمیز</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#">
                        <img width="80" src="/client/assets/story/best price.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">بهترین قیمت</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/perfume.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">عطرهای اصل</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/takhfif.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">تخفیف ویژه</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/cover.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">کاور گوشی</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#"
                    ><img width="80" src="/client/assets/story/tamiz.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">لباس تمیز</p>
                </div>
                <div
                    class="swiper-slide d-flex flex-column justify-content-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <a href="#">
                        <img width="80" src="/client/assets/story/best price.jpeg" />
                    </a>
                    <p class="text-center my-2 fw-medium fs-7">بهترین قیمت</p>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Story Modal -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-header border-bottom-0">
                <button
                    type="button"
                    class="btn-close bg-white rounded-4"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner pb-5">
                        <div class="carousel-item active">
                            <img
                                src="/client/assets/story/best price.jpeg"
                                class="d-block w-25 mx-auto"
                                alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="/client/assets/story/cover.jpeg"
                                class="d-block w-25 mx-auto"
                                alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="/client/assets/story/perfume.jpeg"
                                class="d-block w-25 mx-auto"
                                alt="..." />
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- === slider === -->
<section class="container-fluid p-0">
    <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide-to="5"
                aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/client/assets/slider/1.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/client/assets/slider/2.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/client/assets/slider/3.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/client/assets/slider/4.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/client/assets/slider/5.webp" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item active" data-bs-interval="3500">
                <img src="/client/assets/slider/6.gif" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- mobile supermarket banner -->
<div class="container rounded-3 mt-4 d-block d-md-none">
    <img src="/client/assets/slider/supermarket.png" alt="banner" class="w-100" />
</div>

<!-- === services === -->
<section
    class="services container d-flex overflow-x-auto px-lg-0 flex-md-wrap align-items-center justify-content-center gap-3 gap-lg-5 mt-3 mt-lg-5">
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/jet.png" alt="digikala jet" />
        </a>
        <p class="fs-8">دیجی‌کالا جت</p>
    </div>
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/digipay.png" alt="digipay" />
        </a>
        <p class="fs-8">دیجی‌پی</p>
    </div>
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/style.png" alt="Ds" />
        </a>
        <p class="fs-8">%۷۰ تخفیف‌ پلاس</p>
    </div>
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/omde.png" alt="bussiness" />
        </a>
        <p class="fs-8">موبایل کارکرده</p>
    </div>
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/ersal.png" alt="send" />
        </a>
        <p class="fs-8">گیفت کارت</p>
    </div>
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/lavazem.png" alt="pencile" />
        </a>
        <p class="fs-8">بازی برنده‌ها</p>
    </div>
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a href="#">
            <img width="50" src="/client/assets/services/vaght.png" alt="time to buy" />
        </a>
        <p class="fs-8">سوپرمارکت پرتخفیف</p>
    </div>

    <!-- More -->
    <div
        class="d-flex flex-column align-items-center justify-content-center gap-2">
        <a
            href="#"
            class="bg-secondary-subtle text-black-50 rounded-5 p-3"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <svg
                width="23"
                height="23"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-three-dots"
                viewBox="0 0 16 16">
                <path
                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
            </svg>
        </a>
        <p class="fs-8">بیشتر</p>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header p-4">
                    <h6 class="modal-title fw-medium" id="exampleModalLabel">
                        خدمات دیجی‌کالا
                    </h6>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body m-5">
                    <!-- First section -->
                    <div
                        class="d-flex align-items-center justify-content-center flex-wrap gap-5 mb-5">
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/jet.png"
                                    alt="digikala jet" />
                            </a>
                            <p class="fs-8">دیجی‌کالا جت</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/digipay.png"
                                    alt="digipay" />
                            </a>
                            <p class="fs-8">دیجی‌پی</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/style.png"
                                    alt="Ds" />
                            </a>
                            <p class="fs-8">%۷۰ تخفیف‌ پلاس</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/omde.png"
                                    alt="bussiness" />
                            </a>
                            <p class="fs-8">موبایل کارکرده</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/ersal.png"
                                    alt="send" />
                            </a>
                            <p class="fs-8">گیفت کارت</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/lavazem.png"
                                    alt="pencile" />
                            </a>
                            <p class="fs-8">بازی برنده‌ها</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/vaght.png"
                                    alt="time to buy" />
                            </a>
                            <p class="fs-8">سوپرمارکت پرتخفیف</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/jet.png"
                                    alt="digikala jet" />
                            </a>
                            <p class="fs-8">دیجی‌کالا جت</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/digipay.png"
                                    alt="digipay" />
                            </a>
                            <p class="fs-8">دیجی‌پی</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/style.png"
                                    alt="Ds" />
                            </a>
                            <p class="fs-8">%۷۰ تخفیف‌ پلاس</p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/omde.png"
                                    alt="bussiness" />
                            </a>
                            <p class="fs-8">موبایل کارکرده</p>
                        </div>
                    </div>

                    <!-- Digi Plus -->
                    <div class="mt-5">
                        <div class="d-flex flex-column justify-content-center gap-2">
                            <a href="#">
                                <img
                                    width="50"
                                    src="/client/assets/services/digiplus.png"
                                    alt="digiplus" />
                            </a>
                            <p class="fs-8">دیجی‌پلاس</p>
                        </div>
                    </div>

                    <!-- other digikala services -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- === Product slider === -->
<section
    class="container-fluid px-0 container-lg my-4 my-lg-0 p-lg-4 productSlider">
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
                    alt="slide-img" />

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
                    alt="slide-img" />
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
                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </p>
        </div>

        <div class="swiper mySwiper w-100" id="product">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 1.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 2.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 3.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 4.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 5.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 6.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 7.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 8.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 9.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 10.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 11.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img
                            src="/client/assets/productSlider/slide 12.webp"
                            alt="slide-img" />
                        <p class="fs-8 fw-bold">هدست سونی مدل MDR-ZX110</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-around w-100">
                        <h6>2%</h6>
                        <div class="price mt-3">
                            <p class="fs-8">
                                615,000<span class="fs-9 me-2">تومان</span>
                            </p>
                            <del class="beforeDiscount fs-9 text-end">629,000</del>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <svg
                        width="80"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="text-info my-5">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="fs-8 fw-bold my-4">مشاهده همه</p>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- === Super market Suggest === -->
<section
    class="container my-4 bg-secondary-subtle rounded-4 superMarketSuggest overflow-hidden">
    <a href="#" class="row align-items-center p-4">
        <div class="col-12 col-lg-5 d-flex flex-wrap align-items-center gap-3">
            <img
                src="/client/assets/imagePackage/fresh.webp"
                alt="fresh basket"
                class="d-none d-md-block" />
            <img
                src="/client/assets/imagePackage/fresh-incredible-offer.svg"
                alt="fresh basket" />
            <p
                class="fs-7 text-white bg-success px-3 py-2 rounded-5 mb-3 mx-auto mb-lg-0 mx-lg-0">
                تا 59% تخفیف
            </p>
        </div>
        <div
            class="col-12 col-lg-7 d-flex align-items-center justify-content-end gap-3">
            <div class="offProduct">
                <img src="/client/assets/imagePackage/1.webp" alt="image" />
                <span class="bg-danger px-2 py-1 text-white rounded-5">59%</span>
            </div>
            <div class="offProduct">
                <img src="/client/assets/imagePackage/2.webp" alt="image" />
                <span class="bg-danger px-2 py-1 text-white rounded-5">59%</span>
            </div>
            <div class="offProduct d-none d-md-block">
                <img src="/client/assets/imagePackage/3.webp" alt="image" />
                <span class="bg-danger px-2 py-1 text-white rounded-5">59%</span>
            </div>
            <div class="offProduct d-none d-md-block">
                <img src="/client/assets/imagePackage/4.webp" alt="image" />
                <span class="bg-danger px-2 py-1 text-white rounded-5">59%</span>
            </div>
            <div class="offProduct d-none d-md-block">
                <img src="/client/assets/imagePackage/5.webp" alt="image" />
                <span class="bg-danger px-2 py-1 text-white rounded-5">59%</span>
            </div>
            <div class="offProduct d-none d-md-block">
                <img src="/client/assets/imagePackage/6.webp" alt="image" />
                <span class="bg-danger px-2 py-1 text-white rounded-5">59%</span>
            </div>

            <div class="fs-8 fw-medium text-success bg-white px-4 py-3 rounded-5">
                <p class="d-none d-lg-block">بیش از ١۰۰ کالا</p>
                <span class="ms-lg-2">
              <svg
                  width="19"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
              </svg>
            </span>
            </div>
        </div>
    </a>
</section>

<!-- === Package Suggestion === -->
<section
    class="container d-flex align-items-center justify-content-center flex-wrap gap-3">
    <a href="#">
        <img
            class="rounded-4"
            width="310"
            src="/client/assets/imagePackage/image package 1.webp"
            alt="image-package" />
    </a>
    <a href="#">
        <img
            class="rounded-4"
            width="310"
            src="/client/assets/imagePackage/image package 2.webp"
            alt="image-package"
        /></a>
    <a href="#"
    ><img
            class="rounded-4"
            width="310"
            src="/client/assets/imagePackage/image package 3.webp"
            alt="image-package"
        /></a>
    <a href="#"
    ><img
            class="rounded-4"
            width="310"
            src="/client/assets/imagePackage/image package 4.gif"
            alt="image-package"
        /></a>
</section>

<!-- === Product Categories === -->
<section class="container my-5">
    <h4 class="text-center">خرید بر اساس دسته‌بندی</h4>
    <div
        class="mt-5 d-flex align-items-center justify-content-center flex-wrap gap-5">
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/1.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">موبایل</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/2.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">کتاب،لوازم تحریر و هنر</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/3.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">کالای دیجیتال</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/4.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">خانه و آشپزخانه</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/5.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">لوازم خانگی برقی</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/6.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">مد و پوشاک</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/7.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">ساعت،طلا و جواهرات</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/8.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">آرایشی بهداشتی</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/9.jpg"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">تجهیزات پزشکی و سلامت</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/10.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">ورزش و سفر</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/11.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">کارت هدیه و گیفت کارت</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/12.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">کالاهای سوپرمارکتی</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/13.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">اسباب بازی، کودک و نوزاد</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/14.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">ابزارالات و تجهیزات</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/15.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">خودرو و موتورسیکلت</p>
        </a>
        <a
            href="#"
            class="d-flex flex-column justify-content-center align-items-center">
            <img
                width="100"
                src="/client/assets/categories/16.png"
                alt="product categories" />
            <p class="text-black fw-medium fs-8">محصولات بومی و محلی</p>
        </a>
    </div>
</section>

<!-- === Ads Section === -->
<section class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img
                class="w-100 h-100 rounded-4 object-fit-cover"
                src="/client/assets/imagePackage/easyLife.webp"
                alt="ads" />
        </div>
        <div class="col-12 col-lg-6">
            <img
                class="w-100 h-100 rounded-4 object-fit-cover"
                src="/client/assets/imagePackage//molfix.jpg"
                alt="ads" />
        </div>
    </div>
</section>

<!-- === Most Favorite Brand === -->
<section class="container my-5 border rounded p-3 brands">
    <h4 class="text-center">✨&nbsp; محبوب‌ترین برندها</h4>
    <div class="swiper myBrandSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 1.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 2.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 3.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 4.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 5.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 6.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 7.jpg" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 8.jpg" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 9.jpg" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 10.jpg" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 11.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 12.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 13.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 14.jpg" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 15.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 16.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 17.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 18.png" alt="brand" />
            </div>
            <div class="swiper-slide border-end pe-3">
                <img width="110" src="/client/assets/mostFav/brand 19.jpg" alt="brand" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- === weblog === -->
<section class="container my-5">
    <div class="w-100 d-flex align-items-center justify-content-between mb-3">
        <h3 class="fs-5 fw-medium">خواندنی‌ها</h3>
        <a href="#" class="text-info fs-8">
            مطالب بیشتر در دیجی‌کالا مگ
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
                    d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </a>
    </div>
    <!-- blogs -->
    <div
        class="d-flex flex-wrap align-items-center justify-content-center gap-4">
        <a href="#" class="blog rounded-3 border d-flex flex-column">
            <img
                src="/client/assets/blog/paris-olympics-opening-ceremony.jpg"
                alt="paris-olympics-opening-ceremony"
                class="rounded-top-3" />
            <p class="fs-8 p-2 my-3 text-black">
                ۸ لحظه‌ی غافلگیرانه در افتتاحیه المپیک پاریس که خبرساز شد
            </p>
        </a>
        <a href="#" class="blog rounded-3 border d-flex flex-column">
            <img
                src="/client/assets/blog/samsung-galaxy-z-fold-6-14.jpg"
                alt="samsung-galaxy-z-fold-6-14.jpg"
                class="rounded-top-3" />
            <p class="fs-8 p-2 my-3 text-black">
                گلکسی زد فولد ۶ اسلیم چندان باریک نخواهد بود
            </p>
        </a>
        <a href="#" class="blog rounded-3 border d-flex flex-column">
            <img
                src="/client/assets/blog/Makeup-with-Acne-Prone-Skin.jpeg"
                alt="Makeup-with-Acne-Prone-Skin.jpeg"
                class="rounded-top-3" />
            <p class="fs-8 p-2 my-3 text-black">
                آرایش با پوست مستعد آکنه چه ملاحظاتی دارد؟
            </p>
        </a>
        <a href="#" class="blog rounded-3 border d-flex flex-column">
            <img
                src="/client/assets/blog/digipay-cover.jpg"
                alt="digipay-cover.jpg"
                class="rounded-top-3" />
            <p class="fs-8 p-2 my-3 text-black">معرفی دیجی‌پی و خدمات مالی آن</p>
        </a>
    </div>
</section>

<!-- === Footer === -->
<footer class="mt-5 border-top pt-5">
    <div class="container-fluid px-lg-5">
        <div
            class="d-none d-lg-flex align-items-center justify-content-between">
            <img width="100" src="/client/assets/digi.svg" alt="digi" />
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
                        d="m4.5 15.75 7.5-7.5 7.5 7.5" />
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
                        d="m4.5 15.75 7.5-7.5 7.5 7.5" />
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
                        d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
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
                    width="40" />
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
            class="container d-none d-lg-flex align-items-center justify-content-center flex-wrap gap-5 mt-5">
            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/express-delivery.svg"
                    alt="icons" />
                <p class="text-center fs-8 fw-medium">امکان تحویل اکسپرس</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/cash-on-delivery.svg"
                    alt="icons" />
                <p class="text-center fs-8 fw-medium">امکان پرداخت در محل</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/support.svg"
                    alt="icons" />
                <p class="text-center fs-8 fw-medium">7 روز هفته، 24 ساعته</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/days-return.svg"
                    alt="icons" />
                <p class="text-center fs-8 fw-medium">هفت روز ضمانت بازگشت کالا</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center">
                <img
                    width="65"
                    src="/client/assets/footer/icons/original-products.svg"
                    alt="icons" />
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
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
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
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
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
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
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
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
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
                        class="border px-3 py-2 rounded-2 fs-8" />
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
                    alt="icondigi" />
                <h5 class="text-white">دانلود اپلیکیشن دیجی کالا</h5>
            </div>

            <div class="col-6 d-flex flex-wrap align-items-center gap-5">
                <div>
                    <img src="/client/assets/footer/coffe-bazzar.svg" alt="bazar" />
                </div>
                <div>
                    <img src="/client/assets/footer/myket.svg" alt="myket" />
                </div>
                <div>
                    <img src="/client/assets/footer/sib-app.svg" alt="sib" />
                </div>
                <div class="bg-white p-3 rounded-3">
                    <img src="/client/assets/footer/More.svg" alt="more" />
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
                                d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </p>
                </a>
            </div>

            <div
                class="col-12 col-lg-6 d-flex flex-wrap align-items-center mt-3 justify-content-center gap-lg-5 gap-3">
                <div class="border p-3 rounded">
                    <img width="80" src="/client/assets/footer/rezi.webp" alt="" />
                </div>
                <div class="border p-3 rounded">
                    <img width="60" src="/client/assets/footer/kasbokar.webp" alt="logo" />
                </div>
                <div class="border p-3 rounded">
                    <img
                        width="70"
                        src="/client/assets/footer/footerlogo2.webp"
                        alt="logo" />
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
                <img src="/client/assets/footer/brands/1.svg" width="100" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/2.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/3.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/4.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/5.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/6.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/7.svg" width="140" alt="brand" />
            </a>
            <a href="#">
                <img src="/client/assets/footer/brands/8.svg" width="140" alt="brand" />
            </a>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/9.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/10.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/11.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/12.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/13.svg" width="140" alt="brand" />
            </a>
            <a href="#" class="border-start border-secondary-subtle">
                <img src="/client/assets/footer/brands/14.svg" width="140" alt="brand" />
            </a>
            <a href="#">
                <img src="/client/assets/footer/brands/15.svg" width="140" alt="brand" />
            </a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS , Swiper JS , and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/client/js/main.js"></script>
</body>
</html>
