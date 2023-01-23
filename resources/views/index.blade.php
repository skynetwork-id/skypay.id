<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head>
        <base href="" />
        <title>
            Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem
            for HTML, Vue, React, Angular & Laravel by Keenthemes
        </title>
        <meta charset="utf-8" />
        <meta
            name="description"
            content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free."
        />
        <meta
            name="keywords"
            content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta
            property="og:title"
            content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express Node.js & Flask Admin Dashboard Theme"
        />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
        />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link
            href="assets/plugins/global/plugins.bundle.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="assets/css/style.bundle.css"
            rel="stylesheet"
            type="text/css"
        />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body
        id="kt_body"
        data-bs-spy="scroll"
        data-bs-target="#kt_landing_menu"
        class="bg-white position-relative app-blank"
    >
        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode =
                        document.documentElement.getAttribute(
                            "data-theme-mode"
                        );
                } else {
                    if (localStorage.getItem("data-theme") !== null) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia(
                        "(prefers-color-scheme: dark)"
                    ).matches
                        ? "dark"
                        : "light";
                }
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Header Section-->
            <div class="mb-0" id="home">
                <!--begin::Wrapper-->
                <div
                    class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                    style="
                        background-image: url(assets/media/svg/illustrations/landing.svg);
                    "
                >
                    <!--begin::Header-->
                    <div
                        class="landing-header"
                        data-kt-sticky="true"
                        data-kt-sticky-name="landing-header"
                        data-kt-sticky-offset="{default: '200px', lg: '300px'}"
                    >
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Wrapper-->
                            <div
                                class="d-flex align-items-center justify-content-between"
                            >
                                <!--begin::Logo-->
                                <div
                                    class="d-flex align-items-center flex-equal"
                                >
                                    <!--begin::Mobile menu toggle-->
                                    <button
                                        class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                        id="kt_landing_menu_toggle"
                                    >
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                        <span class="svg-icon svg-icon-2hx">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    opacity="0.3"
                                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Mobile menu toggle-->
                                    <!--begin::Logo image-->
                                    <a href="../../demo1/dist/landing.html">
                                        <img
                                            alt="Logo"
                                            src="assets/media/logos/landing.svg"
                                            class="logo-default h-25px h-lg-30px"
                                        />
                                        <img
                                            alt="Logo"
                                            src="assets/media/logos/landing-dark.svg"
                                            class="logo-sticky h-20px h-lg-25px"
                                        />
                                    </a>
                                    <!--end::Logo image-->
                                </div>
                                <!--end::Logo-->
                                <!--begin::Menu wrapper-->
                                <div
                                    class="d-lg-block"
                                    id="kt_header_nav_wrapper"
                                >
                                    <div
                                        class="d-lg-block p-5 p-lg-0"
                                        data-kt-drawer="true"
                                        data-kt-drawer-name="landing-menu"
                                        data-kt-drawer-activate="{default: true, lg: false}"
                                        data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="200px"
                                        data-kt-drawer-direction="start"
                                        data-kt-drawer-toggle="#kt_landing_menu_toggle"
                                        data-kt-swapper="true"
                                        data-kt-swapper-mode="prepend"
                                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}"
                                    >
                                        <!--begin::Menu-->
                                        <div
                                            class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                            id="kt_landing_menu"
                                        >
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a
                                                    class="menu-link nav-link active py-3 px-4 px-xxl-6"
                                                    href="#kt_body"
                                                    data-kt-scroll-toggle="true"
                                                    data-kt-drawer-dismiss="true"
                                                    >Home</a
                                                >
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a
                                                    class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                    href="#how-it-works"
                                                    data-kt-scroll-toggle="true"
                                                    data-kt-drawer-dismiss="true"
                                                    >How it Works</a
                                                >
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a
                                                    class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                    href="#achievements"
                                                    data-kt-scroll-toggle="true"
                                                    data-kt-drawer-dismiss="true"
                                                    >Achievements</a
                                                >
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a
                                                    class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                    href="#team"
                                                    data-kt-scroll-toggle="true"
                                                    data-kt-drawer-dismiss="true"
                                                    >Team</a
                                                >
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a
                                                    class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                    href="#portfolio"
                                                    data-kt-scroll-toggle="true"
                                                    data-kt-drawer-dismiss="true"
                                                    >Portfolio</a
                                                >
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a
                                                    class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                    href="#pricing"
                                                    data-kt-scroll-toggle="true"
                                                    data-kt-drawer-dismiss="true"
                                                    >Pricing</a
                                                >
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Menu wrapper-->
                                <!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">
                                    <a
                                        href="../../demo1/dist/authentication/layouts/basic/sign-in.html"
                                        class="btn btn-success"
                                        >Sign In</a
                                    >
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Landing hero-->
                    <div
                        class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9"
                    >
                        <!--begin::Heading-->
                        <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                            <!--begin::Title-->
                            <h1
                                class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15"
                            >
                                Build An Outstanding Solutions <br />with
                                <span
                                    style="
                                        background: linear-gradient(
                                            to right,
                                            #12ce5d 0%,
                                            #ffd80c 100%
                                        );
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;
                                    "
                                >
                                    <span id="kt_landing_hero_text"
                                        >The Best Theme Ever</span
                                    >
                                </span>
                            </h1>
                            <!--end::Title-->
                            <!--begin::Action-->
                            <a
                                href="../../demo1/dist/index.html"
                                class="btn btn-primary"
                                >Try Metronic</a
                            >
                            <!--end::Action-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Clients-->
                        <div
                            class="d-flex flex-center flex-wrap position-relative px-5"
                        >
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="Fujifilm"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/fujifilm.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="Vodafone"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/vodafone.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="KPMG International"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/kpmg.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="Nasa"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/nasa.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="Aspnetzero"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/aspnetzero.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="AON - Empower Results"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/aon.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="Hewlett-Packard"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/hp-3.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div
                                class="d-flex flex-center m-3 m-md-6"
                                data-bs-toggle="tooltip"
                                title="Truman"
                            >
                                <img
                                    src="assets/media/svg/brand-logos/truman.svg"
                                    class="mh-30px mh-lg-40px"
                                    alt=""
                                />
                            </div>
                            <!--end::Client-->
                        </div>
                        <!--end::Clients-->
                    </div>
                    <!--end::Landing hero-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Curve bottom-->
                <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                    <svg
                        viewBox="15 12 1470 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <!--end::Curve bottom-->
            </div>
            <!--end::Header Section-->
            <!--begin::How It Works Section-->
            <div class="mb-n10 mb-lg-n20 z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mb-17">
                        <!--begin::Title-->
                        <h3
                            class="fs-2hx text-dark mb-5"
                            id="how-it-works"
                            data-kt-scroll-offset="{default: 100, lg: 150}"
                        >
                            How it Works
                        </h3>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="fs-5 text-muted fw-bold">
                            Save thousands to millions of bucks by using single
                            tool <br />for different amazing and great useful
                            admin
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="row w-100 gy-10 mb-md-20">
                        <!--begin::Col-->
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img
                                    src="assets/media/illustrations/sketchy-1/2.png"
                                    class="mh-125px mb-9"
                                    alt=""
                                />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span
                                        class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3"
                                        >1</span
                                    >
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-3 fw-bold text-dark">
                                        Jane Miller
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div
                                    class="fw-semibold fs-6 fs-lg-4 text-muted"
                                >
                                    Save thousands to millions of bucks <br />by
                                    using single tool for different
                                    <br />amazing and great
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img
                                    src="assets/media/illustrations/sketchy-1/8.png"
                                    class="mh-125px mb-9"
                                    alt=""
                                />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span
                                        class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3"
                                        >2</span
                                    >
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-3 fw-bold text-dark">
                                        Setup Your App
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div
                                    class="fw-semibold fs-6 fs-lg-4 text-muted"
                                >
                                    Save thousands to millions of bucks <br />by
                                    using single tool for different
                                    <br />amazing and great
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img
                                    src="assets/media/illustrations/sketchy-1/12.png"
                                    class="mh-125px mb-9"
                                    alt=""
                                />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span
                                        class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3"
                                        >3</span
                                    >
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-3 fw-bold text-dark">
                                        Enjoy Nautica App
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div
                                    class="fw-semibold fs-6 fs-lg-4 text-muted"
                                >
                                    Save thousands to millions of bucks <br />by
                                    using single tool for different
                                    <br />amazing and great
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Product slider-->
                    <div class="tns tns-default">
                        <!--begin::Slider-->
                        <div
                            data-tns="true"
                            data-tns-loop="true"
                            data-tns-swipe-angle="false"
                            data-tns-speed="2000"
                            data-tns-autoplay="true"
                            data-tns-autoplay-timeout="18000"
                            data-tns-controls="true"
                            data-tns-nav="false"
                            data-tns-items="1"
                            data-tns-center="false"
                            data-tns-dots="false"
                            data-tns-prev-button="#kt_team_slider_prev1"
                            data-tns-next-button="#kt_team_slider_next1"
                        >
                            <!--begin::Item-->
                            <div
                                class="text-center px-5 pt-5 pt-lg-10 px-lg-10"
                            >
                                <img
                                    src="assets/media/demos/demo1/light-ltr.png"
                                    class="card-rounded shadow mh-lg-650px mw-100"
                                    alt=""
                                />
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div
                                class="text-center px-5 pt-5 pt-lg-10 px-lg-10"
                            >
                                <img
                                    src="assets/media/demos/demo2/light-ltr.png"
                                    class="card-rounded shadow mh-lg-650px mw-100"
                                    alt=""
                                />
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div
                                class="text-center px-5 pt-5 pt-lg-10 px-lg-10"
                            >
                                <img
                                    src="assets/media/demos/demo4/light-ltr.png"
                                    class="card-rounded shadow mh-lg-650px mw-100"
                                    alt=""
                                />
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div
                                class="text-center px-5 pt-5 pt-lg-10 px-lg-10"
                            >
                                <img
                                    src="assets/media/demos/demo5/light-ltr.png"
                                    class="card-rounded shadow mh-lg-650px mw-100"
                                    alt=""
                                />
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Slider-->
                        <!--begin::Slider button-->
                        <button
                            class="btn btn-icon btn-active-color-primary"
                            id="kt_team_slider_prev1"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Slider button-->
                        <!--begin::Slider button-->
                        <button
                            class="btn btn-icon btn-active-color-primary"
                            id="kt_team_slider_next1"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Slider button-->
                    </div>
                    <!--end::Product slider-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::How It Works Section-->
            <!--begin::Statistics Section-->
            <div class="mt-sm-n10">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg
                        viewBox="15 -1 1470 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="pb-15 pt-18 landing-dark-bg">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Heading-->
                        <div
                            class="text-center mt-15 mb-18"
                            id="achievements"
                            data-kt-scroll-offset="{default: 100, lg: 150}"
                        >
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-white fw-bold mb-5">
                                We Make Things Better
                            </h3>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="fs-5 text-gray-700 fw-bold">
                                Save thousands to millions of bucks by using
                                single tool <br />for different amazing and
                                great useful admin
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Statistics-->
                        <div class="d-flex flex-center">
                            <!--begin::Items-->
                            <div
                                class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px"
                            >
                                <!--begin::Item-->
                                <div
                                    class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                    style="
                                        background-image: url('assets/media/svg/misc/octagon.svg');
                                    "
                                >
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span
                                        class="svg-icon svg-icon-2tx svg-icon-white mb-3"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <rect
                                                x="2"
                                                y="2"
                                                width="9"
                                                height="9"
                                                rx="2"
                                                fill="currentColor"
                                            />
                                            <rect
                                                opacity="0.3"
                                                x="13"
                                                y="2"
                                                width="9"
                                                height="9"
                                                rx="2"
                                                fill="currentColor"
                                            />
                                            <rect
                                                opacity="0.3"
                                                x="13"
                                                y="13"
                                                width="9"
                                                height="9"
                                                rx="2"
                                                fill="currentColor"
                                            />
                                            <rect
                                                opacity="0.3"
                                                x="2"
                                                y="13"
                                                width="9"
                                                height="9"
                                                rx="2"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <!--begin::Value-->
                                        <div
                                            class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center"
                                        >
                                            <div
                                                class="min-w-70px"
                                                data-kt-countup="true"
                                                data-kt-countup-value="700"
                                                data-kt-countup-suffix="+"
                                            >
                                                0
                                            </div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span
                                            class="text-gray-600 fw-semibold fs-5 lh-0"
                                            >Known Companies</span
                                        >
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div
                                    class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                    style="
                                        background-image: url('assets/media/svg/misc/octagon.svg');
                                    "
                                >
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                                    <span
                                        class="svg-icon svg-icon-2tx svg-icon-white mb-3"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.3"
                                                d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.3"
                                                d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <!--begin::Value-->
                                        <div
                                            class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center"
                                        >
                                            <div
                                                class="min-w-70px"
                                                data-kt-countup="true"
                                                data-kt-countup-value="80"
                                                data-kt-countup-suffix="K+"
                                            >
                                                0
                                            </div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span
                                            class="text-gray-600 fw-semibold fs-5 lh-0"
                                            >Statistic Reports</span
                                        >
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div
                                    class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                    style="
                                        background-image: url('assets/media/svg/misc/octagon.svg');
                                    "
                                >
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span
                                        class="svg-icon svg-icon-2tx svg-icon-white mb-3"
                                    >
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.3"
                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                opacity="0.3"
                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <!--begin::Value-->
                                        <div
                                            class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center"
                                        >
                                            <div
                                                class="min-w-70px"
                                                data-kt-countup="true"
                                                data-kt-countup-value="35"
                                                data-kt-countup-suffix="M+"
                                            >
                                                0
                                            </div>
                                        </div>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span
                                            class="text-gray-600 fw-semibold fs-5 lh-0"
                                            >Secure Payments</span
                                        >
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Testimonial-->
                        <div
                            class="fs-2 fw-semibold text-muted text-center mb-3"
                        >
                            <span class="fs-1 lh-1 text-gray-700">“</span>When
                            you care about your topic, you’ll write about it in
                            a
                            <br />
                            <span class="text-gray-700 me-1">more powerful</span
                            >, emotionally expressive way
                            <span class="fs-1 lh-1 text-gray-700">“</span>
                        </div>
                        <!--end::Testimonial-->
                        <!--begin::Author-->
                        <div class="fs-2 fw-semibold text-muted text-center">
                            <a
                                href="../../demo1/dist/account/security.html"
                                class="link-primary fs-4 fw-bold"
                                >Marcus Levy,</a
                            >
                            <span class="fs-4 fw-bold text-gray-600"
                                >KeenThemes CEO</span
                            >
                        </div>
                        <!--end::Author-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Curve bottom-->
                <div class="landing-curve landing-dark-color">
                    <svg
                        viewBox="15 12 1470 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <!--end::Curve bottom-->
            </div>
            <!--end::Statistics Section-->
            <!--begin::Team Section-->
            <div class="py-10 py-lg-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mb-12">
                        <!--begin::Title-->
                        <h3
                            class="fs-2hx text-dark mb-5"
                            id="team"
                            data-kt-scroll-offset="{default: 100, lg: 150}"
                        >
                            Our Great Team
                        </h3>
                        <!--end::Title-->
                        <!--begin::Sub-title-->
                        <div class="fs-5 text-muted fw-bold">
                            It’s no doubt that when a development takes longer
                            to complete, additional costs to <br />integrate and
                            test each extra feature creeps up and haunts most of
                            us.
                        </div>
                        <!--end::Sub-title=-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Slider-->
                    <div class="tns tns-default" style="direction: ltr">
                        <!--begin::Wrapper-->
                        <div
                            data-tns="true"
                            data-tns-loop="true"
                            data-tns-swipe-angle="false"
                            data-tns-speed="2000"
                            data-tns-autoplay="true"
                            data-tns-autoplay-timeout="18000"
                            data-tns-controls="true"
                            data-tns-nav="false"
                            data-tns-items="1"
                            data-tns-center="false"
                            data-tns-dots="false"
                            data-tns-prev-button="#kt_team_slider_prev"
                            data-tns-next-button="#kt_team_slider_next"
                            data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}"
                        >
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-1.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >Paul Miles</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        Development Lead
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-2.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >Melisa Marcus</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        Creative Director
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-5.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >David Nilson</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        Python Expert
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-20.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >Anne Clarc</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        Project Manager
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-23.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >Ricky Hunt</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        Art Director
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-12.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >Alice Wayde</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        Marketing Manager
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="text-center">
                                <!--begin::Photo-->
                                <div
                                    class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="
                                        background-image: url('assets/media/avatars/300-9.jpg');
                                    "
                                ></div>
                                <!--end::Photo-->
                                <!--begin::Person-->
                                <div class="mb-0">
                                    <!--begin::Name-->
                                    <a
                                        href="#"
                                        class="text-dark fw-bold text-hover-primary fs-3"
                                        >Carles Puyol</a
                                    >
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    <div
                                        class="text-muted fs-6 fw-semibold mt-1"
                                    >
                                        QA Managers
                                    </div>
                                    <!--begin::Position-->
                                </div>
                                <!--end::Person-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <button
                            class="btn btn-icon btn-active-color-primary"
                            id="kt_team_slider_prev"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button
                            class="btn btn-icon btn-active-color-primary"
                            id="kt_team_slider_next"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                            <span class="svg-icon svg-icon-3x">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Slider-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Team Section-->
            <!--begin::Projects Section-->
            <div class="mb-lg-n15 position-relative z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Card-->
                    <div
                        class="card"
                        style="
                            filter: drop-shadow(
                                0px 0px 40px rgba(68, 81, 96, 0.08)
                            );
                        "
                    >
                        <!--begin::Card body-->
                        <div class="card-body p-lg-20">
                            <!--begin::Heading-->
                            <div class="text-center mb-5 mb-lg-10">
                                <!--begin::Title-->
                                <h3
                                    class="fs-2hx text-dark mb-5"
                                    id="portfolio"
                                    data-kt-scroll-offset="{default: 100, lg: 250}"
                                >
                                    Our Projects
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tabs wrapper-->
                            <div class="d-flex flex-center mb-5 mb-lg-15">
                                <!--begin::Tabs-->
                                <ul
                                    class="nav border-transparent flex-center fs-5 fw-bold"
                                >
                                    <li class="nav-item">
                                        <a
                                            class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active"
                                            href="#"
                                            data-bs-toggle="tab"
                                            data-bs-target="#kt_landing_projects_latest"
                                            >Latest</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link text-gray-500 text-active-primary px-3 px-lg-6"
                                            href="#"
                                            data-bs-toggle="tab"
                                            data-bs-target="#kt_landing_projects_web_design"
                                            >Web Design</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link text-gray-500 text-active-primary px-3 px-lg-6"
                                            href="#"
                                            data-bs-toggle="tab"
                                            data-bs-target="#kt_landing_projects_mobile_apps"
                                            >Mobile Apps</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link text-gray-500 text-active-primary px-3 px-lg-6"
                                            href="#"
                                            data-bs-toggle="tab"
                                            data-bs-target="#kt_landing_projects_development"
                                            >Development</a
                                        >
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Tabs wrapper-->
                            <!--begin::Tabs content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div
                                    class="tab-pane fade show active"
                                    id="kt_landing_projects_latest"
                                >
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-23.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-23.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-22.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-22.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-21.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-21.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x400/img-20.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-20.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div
                                    class="tab-pane fade"
                                    id="kt_landing_projects_web_design"
                                >
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-11.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-11.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-12.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-12.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-21.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-21.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x400/img-20.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-20.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div
                                    class="tab-pane fade"
                                    id="kt_landing_projects_mobile_apps"
                                >
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-16.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-16.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-12.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-12.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x400/img-15.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-15.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-23.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-23.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div
                                    class="tab-pane fade"
                                    id="kt_landing_projects_development"
                                >
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x600/img-15.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-15.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Row-->
                                            <div class="row g-10 mb-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-22.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-22.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <!--begin::Item-->
                                                    <a
                                                        class="d-block card-rounded overlay"
                                                        data-fslightbox="lightbox-projects"
                                                        href="assets/media/stock/600x600/img-21.jpg"
                                                    >
                                                        <!--begin::Image-->
                                                        <div
                                                            class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                            style="
                                                                background-image: url('assets/media/stock/600x600/img-21.jpg');
                                                            "
                                                        ></div>
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div
                                                            class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                        >
                                                            <i
                                                                class="bi bi-eye-fill fs-3x text-white"
                                                            ></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Item-->
                                            <a
                                                class="d-block card-rounded overlay"
                                                data-fslightbox="lightbox-projects"
                                                href="assets/media/stock/600x400/img-14.jpg"
                                            >
                                                <!--begin::Image-->
                                                <div
                                                    class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                                                    style="
                                                        background-image: url('assets/media/stock/600x600/img-14.jpg');
                                                    "
                                                ></div>
                                                <!--end::Image-->
                                                <!--begin::Action-->
                                                <div
                                                    class="overlay-layer card-rounded bg-dark bg-opacity-25"
                                                >
                                                    <i
                                                        class="bi bi-eye-fill fs-3x text-white"
                                                    ></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tabs content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Projects Section-->
            <!--begin::Pricing Section-->
            <div class="mt-sm-n20">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg
                        viewBox="15 -1 1470 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="py-20 landing-dark-bg">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column container pt-lg-20">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1
                                    class="fs-2hx fw-bold text-white mb-5"
                                    id="pricing"
                                    data-kt-scroll-offset="{default: 100, lg: 150}"
                                >
                                    Clear Pricing Makes it Easy
                                </h1>
                                <div class="text-gray-600 fw-semibold fs-5">
                                    Save thousands to millions of bucks by using
                                    single tool for different <br />amazing and
                                    outstanding cool and great useful admin
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Pricing-->
                            <div class="text-center" id="kt_pricing">
                                <!--begin::Nav group-->
                                <div
                                    class="nav-group landing-dark-bg d-inline-flex mb-15"
                                    data-kt-buttons="true"
                                    style="border: 1px dashed #2b4666"
                                >
                                    <a
                                        href="#"
                                        class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active"
                                        data-kt-plan="month"
                                        >Monthly</a
                                    >
                                    <a
                                        href="#"
                                        class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3"
                                        data-kt-plan="annual"
                                        >Annual</a
                                    >
                                </div>
                                <!--end::Nav group-->
                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <div
                                            class="d-flex h-100 align-items-center"
                                        >
                                            <!--begin::Option-->
                                            <div
                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10"
                                            >
                                                <!--begin::Heading-->
                                                <div class="mb-7 text-center">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="text-dark mb-5 fw-boldest"
                                                    >
                                                        Startup
                                                    </h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div
                                                        class="text-gray-400 fw-semibold mb-5"
                                                    >
                                                        Best Settings for
                                                        Startups
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="text-center">
                                                        <span
                                                            class="mb-2 text-primary"
                                                            >$</span
                                                        >
                                                        <span
                                                            class="fs-3x fw-bold text-primary"
                                                            data-kt-plan-price-month="99"
                                                            data-kt-plan-price-annual="999"
                                                            >99</span
                                                        >
                                                        <span
                                                            class="fs-7 fw-semibold opacity-50"
                                                            data-kt-plan-price-month="/ Mon"
                                                            data-kt-plan-price-annual="/ Ann"
                                                            >/ Mon</span
                                                        >
                                                    </div>
                                                    <!--end::Price-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Features-->
                                                <div class="w-100 mb-10">
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Up to 10 Active
                                                            Users</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Up to 30 Project
                                                            Integrations</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800"
                                                            >Keen Analytics
                                                            Platform</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="7"
                                                                    y="15.3137"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="8.41422"
                                                                    y="7"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(45 8.41422 7)"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800"
                                                            >Targets Timelines &
                                                            Files</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="7"
                                                                    y="15.3137"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="8.41422"
                                                                    y="7"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(45 8.41422 7)"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800"
                                                            >Unlimited
                                                            Projects</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="7"
                                                                    y="15.3137"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="8.41422"
                                                                    y="7"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(45 8.41422 7)"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Features-->
                                                <!--begin::Select-->
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    >Select</a
                                                >
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <div
                                            class="d-flex h-100 align-items-center"
                                        >
                                            <!--begin::Option-->
                                            <div
                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10"
                                            >
                                                <!--begin::Heading-->
                                                <div class="mb-7 text-center">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="text-white mb-5 fw-boldest"
                                                    >
                                                        Business
                                                    </h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div
                                                        class="text-white opacity-75 fw-semibold mb-5"
                                                    >
                                                        Best Settings for
                                                        Business
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="text-center">
                                                        <span
                                                            class="mb-2 text-white"
                                                            >$</span
                                                        >
                                                        <span
                                                            class="fs-3x fw-bold text-white"
                                                            data-kt-plan-price-month="199"
                                                            data-kt-plan-price-annual="1999"
                                                            >199</span
                                                        >
                                                        <span
                                                            class="fs-7 fw-semibold text-white opacity-75"
                                                            data-kt-plan-price-month="/ Mon"
                                                            data-kt-plan-price-annual="/ Ann"
                                                            >/ Mon</span
                                                        >
                                                    </div>
                                                    <!--end::Price-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Features-->
                                                <div class="w-100 mb-10">
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-white opacity-75 text-start pe-3"
                                                            >Up to 10 Active
                                                            Users</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-white"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-white opacity-75 text-start pe-3"
                                                            >Up to 30 Project
                                                            Integrations</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-white"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-white opacity-75 text-start pe-3"
                                                            >Keen Analytics
                                                            Platform</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-white"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-white opacity-75 text-start pe-3"
                                                            >Targets Timelines &
                                                            Files</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-white"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-white opacity-75"
                                                            >Unlimited
                                                            Projects</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-white"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="7"
                                                                    y="15.3137"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor"
                                                                />
                                                                <rect
                                                                    x="8.41422"
                                                                    y="7"
                                                                    width="12"
                                                                    height="2"
                                                                    rx="1"
                                                                    transform="rotate(45 8.41422 7)"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Features-->
                                                <!--begin::Select-->
                                                <a
                                                    href="#"
                                                    class="btn btn-color-primary btn-active-light-primary btn-light"
                                                    >Select</a
                                                >
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <div
                                            class="d-flex h-100 align-items-center"
                                        >
                                            <!--begin::Option-->
                                            <div
                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10"
                                            >
                                                <!--begin::Heading-->
                                                <div class="mb-7 text-center">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="text-dark mb-5 fw-boldest"
                                                    >
                                                        Enterprise
                                                    </h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div
                                                        class="text-gray-400 fw-semibold mb-5"
                                                    >
                                                        Best Settings for
                                                        Enterprise
                                                    </div>
                                                    <!--end::Description-->
                                                    <!--begin::Price-->
                                                    <div class="text-center">
                                                        <span
                                                            class="mb-2 text-primary"
                                                            >$</span
                                                        >
                                                        <span
                                                            class="fs-3x fw-bold text-primary"
                                                            data-kt-plan-price-month="999"
                                                            data-kt-plan-price-annual="9999"
                                                            >999</span
                                                        >
                                                        <span
                                                            class="fs-7 fw-semibold opacity-50"
                                                            data-kt-plan-price-month="/ Mon"
                                                            data-kt-plan-price-annual="/ Ann"
                                                            >/ Mon</span
                                                        >
                                                    </div>
                                                    <!--end::Price-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Features-->
                                                <div class="w-100 mb-10">
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Up to 10 Active
                                                            Users</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Up to 30 Project
                                                            Integrations</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Keen Analytics
                                                            Platform</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack mb-5"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Targets Timelines &
                                                            Files</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex flex-stack"
                                                    >
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-800 text-start pe-3"
                                                            >Unlimited
                                                            Projects</span
                                                        >
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-1 svg-icon-success"
                                                        >
                                                            <svg
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <rect
                                                                    opacity="0.3"
                                                                    x="2"
                                                                    y="2"
                                                                    width="20"
                                                                    height="20"
                                                                    rx="10"
                                                                    fill="currentColor"
                                                                />
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="currentColor"
                                                                />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Features-->
                                                <!--begin::Select-->
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    >Select</a
                                                >
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Pricing-->
                        </div>
                        <!--end::Plans-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Curve bottom-->
                <div class="landing-curve landing-dark-color">
                    <svg
                        viewBox="15 12 1470 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <!--end::Curve bottom-->
            </div>
            <!--end::Pricing Section-->
            <!--begin::Testimonials Section-->
            <div class="mt-20 mb-n20 position-relative z-index-2">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mb-17">
                        <!--begin::Title-->
                        <h3
                            class="fs-2hx text-dark mb-5"
                            id="clients"
                            data-kt-scroll-offset="{default: 125, lg: 150}"
                        >
                            What Our Clients Say
                        </h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-5 text-muted fw-bold">
                            Save thousands to millions of bucks by using single
                            tool <br />for different amazing and great useful
                            admin
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Row-->
                    <div class="row g-lg-10 mb-10 mb-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-4">
                            <!--begin::Testimonial-->
                            <div
                                class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
                            >
                                <!--begin::Wrapper-->
                                <div class="mb-7">
                                    <!--begin::Rating-->
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                    </div>
                                    <!--end::Rating-->
                                    <!--begin::Title-->
                                    <div class="fs-2 fw-bold text-dark mb-3">
                                        This is by far the cleanest template
                                        <br />and the most well structured
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Feedback-->
                                    <div class="text-gray-500 fw-semibold fs-4">
                                        The most well thought out design theme I
                                        have ever used. The codes are up to
                                        tandard. The css styles are very clean.
                                        In fact the cleanest and the most up to
                                        standard I have ever seen.
                                    </div>
                                    <!--end::Feedback-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div
                                        class="symbol symbol-circle symbol-50px me-5"
                                    >
                                        <img
                                            src="assets/media/avatars/300-1.jpg"
                                            class=""
                                            alt=""
                                        />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <div class="flex-grow-1">
                                        <a
                                            href="#"
                                            class="text-dark fw-bold text-hover-primary fs-6"
                                            >Paul Miles</a
                                        >
                                        <span class="text-muted d-block fw-bold"
                                            >Development Lead</span
                                        >
                                    </div>
                                    <!--end::Name-->
                                </div>
                                <!--end::Author-->
                            </div>
                            <!--end::Testimonial-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                            <!--begin::Testimonial-->
                            <div
                                class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
                            >
                                <!--begin::Wrapper-->
                                <div class="mb-7">
                                    <!--begin::Rating-->
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                    </div>
                                    <!--end::Rating-->
                                    <!--begin::Title-->
                                    <div class="fs-2 fw-bold text-dark mb-3">
                                        This is by far the cleanest template
                                        <br />and the most well structured
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Feedback-->
                                    <div class="text-gray-500 fw-semibold fs-4">
                                        The most well thought out design theme I
                                        have ever used. The codes are up to
                                        tandard. The css styles are very clean.
                                        In fact the cleanest and the most up to
                                        standard I have ever seen.
                                    </div>
                                    <!--end::Feedback-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div
                                        class="symbol symbol-circle symbol-50px me-5"
                                    >
                                        <img
                                            src="assets/media/avatars/300-2.jpg"
                                            class=""
                                            alt=""
                                        />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <div class="flex-grow-1">
                                        <a
                                            href="#"
                                            class="text-dark fw-bold text-hover-primary fs-6"
                                            >Janya Clebert</a
                                        >
                                        <span class="text-muted d-block fw-bold"
                                            >Development Lead</span
                                        >
                                    </div>
                                    <!--end::Name-->
                                </div>
                                <!--end::Author-->
                            </div>
                            <!--end::Testimonial-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4">
                            <!--begin::Testimonial-->
                            <div
                                class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0"
                            >
                                <!--begin::Wrapper-->
                                <div class="mb-7">
                                    <!--begin::Rating-->
                                    <div class="rating mb-6">
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-5"></i>
                                        </div>
                                    </div>
                                    <!--end::Rating-->
                                    <!--begin::Title-->
                                    <div class="fs-2 fw-bold text-dark mb-3">
                                        This is by far the cleanest template
                                        <br />and the most well structured
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Feedback-->
                                    <div class="text-gray-500 fw-semibold fs-4">
                                        The most well thought out design theme I
                                        have ever used. The codes are up to
                                        tandard. The css styles are very clean.
                                        In fact the cleanest and the most up to
                                        standard I have ever seen.
                                    </div>
                                    <!--end::Feedback-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Author-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div
                                        class="symbol symbol-circle symbol-50px me-5"
                                    >
                                        <img
                                            src="assets/media/avatars/300-16.jpg"
                                            class=""
                                            alt=""
                                        />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Name-->
                                    <div class="flex-grow-1">
                                        <a
                                            href="#"
                                            class="text-dark fw-bold text-hover-primary fs-6"
                                            >Steave Brown</a
                                        >
                                        <span class="text-muted d-block fw-bold"
                                            >Development Lead</span
                                        >
                                    </div>
                                    <!--end::Name-->
                                </div>
                                <!--end::Author-->
                            </div>
                            <!--end::Testimonial-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Highlight-->
                    <div
                        class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                        style="
                            background: linear-gradient(
                                90deg,
                                #20aa3e 0%,
                                #03a588 100%
                            );
                        "
                    >
                        <!--begin::Content-->
                        <div class="my-2 me-5">
                            <!--begin::Title-->
                            <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
                                Start With Metronic Today,
                                <span class="fw-normal"
                                    >Speed Up Development!</span
                                >
                            </div>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div
                                class="fs-6 fs-lg-5 text-white fw-semibold opacity-75"
                            >
                                Join over 100,000 Professionals Community to
                                Stay Ahead
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Link-->
                        <a
                            href="https://1.envato.market/EA4JP"
                            class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2"
                            >Purchase on Themeforest</a
                        >
                        <!--end::Link-->
                    </div>
                    <!--end::Highlight-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Testimonials Section-->
            <!--begin::Footer Section-->
            <div class="mb-0">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg
                        viewBox="15 -1 1470 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="landing-dark-bg pt-20">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row py-10 py-lg-20">
                            <!--begin::Col-->
                            <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                                <!--begin::Block-->
                                <div
                                    class="rounded landing-dark-border p-9 mb-10"
                                >
                                    <!--begin::Title-->
                                    <h2 class="text-white">
                                        Would you need a Custom License?
                                    </h2>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="fw-normal fs-4 text-gray-700"
                                        >Email us to
                                        <a
                                            href="https://keenthemes.com/support"
                                            class="text-white opacity-50 text-hover-primary"
                                            >support@keenthemes.com</a
                                        ></span
                                    >
                                    <!--end::Text-->
                                </div>
                                <!--end::Block-->
                                <!--begin::Block-->
                                <div class="rounded landing-dark-border p-9">
                                    <!--begin::Title-->
                                    <h2 class="text-white">
                                        How About a Custom Project?
                                    </h2>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="fw-normal fs-4 text-gray-700"
                                        >Use Our Custom Development Service.
                                        <a
                                            href="../../demo1/dist/pages/user-profile/overview.html"
                                            class="text-white opacity-50 text-hover-primary"
                                            >Click to Get a Quote</a
                                        ></span
                                    >
                                    <!--end::Text-->
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 ps-lg-16">
                                <!--begin::Navs-->
                                <div class="d-flex justify-content-center">
                                    <!--begin::Links-->
                                    <div
                                        class="d-flex fw-semibold flex-column me-20"
                                    >
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-400 mb-6">
                                            More for Metronic
                                        </h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://keenthemes.com/faqs"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                            >FAQ</a
                                        >
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://preview.keenthemes.com/html/metronic/docs"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                            >Documentaions</a
                                        >
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://www.youtube.com/c/KeenThemesTuts/videos"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                            >Video Tuts</a
                                        >
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                            >Changelog</a
                                        >
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://devs.keenthemes.com/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                            >Support Forum</a
                                        >
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://keenthemes.com/blog"
                                            class="text-white opacity-50 text-hover-primary fs-5"
                                            >Blog</a
                                        >
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                    <!--begin::Links-->
                                    <div
                                        class="d-flex fw-semibold flex-column ms-lg-20"
                                    >
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-400 mb-6">
                                            Stay Connected
                                        </h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://www.facebook.com/keenthemes"
                                            class="mb-6"
                                        >
                                            <img
                                                src="assets/media/svg/brand-logos/facebook-4.svg"
                                                class="h-20px me-2"
                                                alt=""
                                            />
                                            <span
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                                >Facebook</span
                                            >
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://github.com/KeenthemesHub"
                                            class="mb-6"
                                        >
                                            <img
                                                src="assets/media/svg/brand-logos/github.svg"
                                                class="h-20px me-2"
                                                alt=""
                                            />
                                            <span
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                                >Github</span
                                            >
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://twitter.com/keenthemes"
                                            class="mb-6"
                                        >
                                            <img
                                                src="assets/media/svg/brand-logos/twitter.svg"
                                                class="h-20px me-2"
                                                alt=""
                                            />
                                            <span
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                                >Twitter</span
                                            >
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://dribbble.com/keenthemes"
                                            class="mb-6"
                                        >
                                            <img
                                                src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                class="h-20px me-2"
                                                alt=""
                                            />
                                            <span
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                                >Dribbble</span
                                            >
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a
                                            href="https://www.instagram.com/keenthemes"
                                            class="mb-6"
                                        >
                                            <img
                                                src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                class="h-20px me-2"
                                                alt=""
                                            />
                                            <span
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6"
                                                >Instagram</span
                                            >
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                </div>
                                <!--end::Navs-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Separator-->
                    <div class="landing-dark-separator"></div>
                    <!--end::Separator-->
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div
                            class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10"
                        >
                            <!--begin::Copyright-->
                            <div
                                class="d-flex align-items-center order-2 order-md-1"
                            >
                                <!--begin::Logo-->
                                <a href="../../demo1/dist/landing.html">
                                    <img
                                        alt="Logo"
                                        src="assets/media/logos/landing.svg"
                                        class="h-15px h-md-20px"
                                    />
                                </a>
                                <!--end::Logo image-->
                                <!--begin::Logo image-->
                                <span
                                    class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"
                                    href="https://keenthemes.com"
                                    >&copy; 2022 Keenthemes Inc.</span
                                >
                                <!--end::Logo image-->
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul
                                class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0"
                            >
                                <li class="menu-item">
                                    <a
                                        href="https://keenthemes.com"
                                        target="_blank"
                                        class="menu-link px-2"
                                        >About</a
                                    >
                                </li>
                                <li class="menu-item mx-5">
                                    <a
                                        href="https://devs.keenthemes.com"
                                        target="_blank"
                                        class="menu-link px-2"
                                        >Support</a
                                    >
                                </li>
                                <li class="menu-item">
                                    <a
                                        href=""
                                        target="_blank"
                                        class="menu-link px-2"
                                        >Purchase</a
                                    >
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Footer Section-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon">
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            opacity="0.5"
                            x="13"
                            y="6"
                            width="13"
                            height="2"
                            rx="1"
                            transform="rotate(90 13 6)"
                            fill="currentColor"
                        />
                        <path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="currentColor"
                        />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->
        </div>
        <!--end::Root-->
        <!--begin::Engage drawers-->
        <!--begin::Demos drawer-->
        <div
            id="kt_engage_demos"
            class="bg-body"
            data-kt-drawer="true"
            data-kt-drawer-name="explore"
            data-kt-drawer-activate="true"
            data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'350px', 'lg': '475px'}"
            data-kt-drawer-direction="end"
            data-kt-drawer-toggle="#kt_engage_demos_toggle"
            data-kt-drawer-close="#kt_engage_demos_close"
        >
            <!--begin::Card-->
            <div class="card shadow-none rounded-0 w-100">
                <!--begin::Header-->
                <div class="card-header" id="kt_engage_demos_header">
                    <h3 class="card-title fw-bold text-gray-700">Demos</h3>
                    <div class="card-toolbar">
                        <button
                            type="button"
                            class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                            id="kt_engage_demos_close"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <rect
                                        opacity="0.5"
                                        x="6"
                                        y="17.3137"
                                        width="16"
                                        height="2"
                                        rx="1"
                                        transform="rotate(-45 6 17.3137)"
                                        fill="currentColor"
                                    />
                                    <rect
                                        x="7.41422"
                                        y="6"
                                        width="16"
                                        height="2"
                                        rx="1"
                                        transform="rotate(45 7.41422 6)"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body" id="kt_engage_demos_body">
                    <!--begin::Content-->
                    <div
                        id="kt_explore_scroll"
                        class="scroll-y me-n5 pe-5"
                        data-kt-scroll="true"
                        data-kt-scroll-height="auto"
                        data-kt-scroll-wrappers="#kt_engage_demos_body"
                        data-kt-scroll-dependencies="#kt_engage_demos_header"
                        data-kt-scroll-offset="5px"
                    >
                        <!--begin::Wrapper-->
                        <div class="mb-0">
                            <!--begin::Heading-->
                            <div class="mb-7">
                                <div class="d-flex flex-stack">
                                    <h3 class="mb-0">Metronic Licenses</h3>
                                    <a
                                        href="https://themeforest.net/licenses/standard"
                                        class="fw-semibold"
                                        target="_blank"
                                        >License FAQs</a
                                    >
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::License-->
                            <div
                                class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5"
                            >
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <div
                                            class="d-flex align-items-center mb-1"
                                        >
                                            <div
                                                class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1"
                                            >
                                                Regular License
                                            </div>
                                            <i
                                                class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                data-bs-toggle="popover"
                                                data-bs-custom-class="popover-inverse"
                                                data-bs-trigger="hover"
                                                data-bs-placement="top"
                                                data-bs-content="Use, by you or one client in a single end product which end users are not charged for"
                                            ></i>
                                        </div>
                                        <div class="fs-7 text-muted">
                                            For single end product used by you
                                            or one client
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span
                                            class="text-muted fs-7 fw-semibold me-n1"
                                            >$</span
                                        >
                                        <span class="text-dark fs-1 fw-bold"
                                            >49</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <!--end::License-->
                            <!--begin::License-->
                            <div
                                class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5"
                            >
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <div
                                            class="d-flex align-items-center mb-1"
                                        >
                                            <div
                                                class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1"
                                            >
                                                Extended License
                                            </div>
                                            <i
                                                class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                data-bs-toggle="popover"
                                                data-bs-custom-class="popover-inverse"
                                                data-bs-trigger="hover"
                                                data-bs-placement="top"
                                                data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."
                                            ></i>
                                        </div>
                                        <div class="fs-7 text-muted">
                                            For single SaaS app with paying
                                            users
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span
                                            class="text-muted fs-7 fw-semibold me-n1"
                                            >$</span
                                        >
                                        <span class="text-dark fs-1 fw-bold"
                                            >969</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <!--end::License-->
                            <!--begin::License-->
                            <div
                                class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5"
                            >
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <div
                                            class="d-flex align-items-center mb-1"
                                        >
                                            <div
                                                class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1"
                                            >
                                                Custom License
                                            </div>
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Reach us for custom license offers.
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <a
                                            href="https://keenthemes.com/contact"
                                            class="btn btn-sm btn-success"
                                            target="_blank"
                                            >Contact Us</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <!--end::License-->
                            <!--begin::Purchase-->
                            <a
                                href="https://1.envato.market/EA4JP"
                                class="btn btn-primary fw-bold mb-15 w-100"
                                >Buy Now</a
                            >
                            <!--end::Purchase-->
                            <!--begin::Demos-->
                            <div class="mb-0">
                                <h3 class="fw-bold text-center mb-6">
                                    30 Metronic Demos
                                </h3>
                                <!--begin::Row-->
                                <div class="row g-5">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-success rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo1/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Metronic Original</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo2/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >SaaS App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo6/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >POS System</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo3/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >New Trend</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo8/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Analytics App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo10/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Project Grid</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo11/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo11/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Finance Planner</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo4/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Jobs Site</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo27/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo27/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Databox Dashboard</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo20/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >CRM Software</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo25/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo25/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >User Guiding App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo30/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo30/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Sales Tracking App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo23/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo23/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Member Dashboard</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo29/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo29/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Project Workspace</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo14/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Project Workplace</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo24/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo24/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Helpdesk App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo26/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo26/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Planable App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo7/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo7/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >CRM Dashboard</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo22/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Media Publisher</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo28/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo28/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >eCommerce App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo19/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Reports Panel</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo9/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo9/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Sales Manager</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo13/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo13/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Classic Dashboard</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo16/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Podcast App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo18/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Goal Tracking</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo21/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Monochrome App</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo12/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Data Analyzer</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo17/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Events Scheduler</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo15/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Crypto Planner</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded"
                                        >
                                            <div class="overlay-wrapper">
                                                <img
                                                    src="assets/media/preview/demos/demo5/light-ltr.png"
                                                    alt="demo"
                                                    class="w-100"
                                                />
                                            </div>
                                            <div
                                                class="overlay-layer bg-dark bg-opacity-10"
                                            >
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                    class="btn btn-sm btn-success shadow"
                                                    >Support Forum</a
                                                >
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Demos-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Demos drawer-->
        <!--begin::Help drawer-->
        <div
            id="kt_help"
            class="bg-body"
            data-kt-drawer="true"
            data-kt-drawer-name="help"
            data-kt-drawer-activate="true"
            data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'350px', 'md': '525px'}"
            data-kt-drawer-direction="end"
            data-kt-drawer-toggle="#kt_help_toggle"
            data-kt-drawer-close="#kt_help_close"
        >
            <!--begin::Card-->
            <div class="card shadow-none rounded-0 w-100">
                <!--begin::Header-->
                <div class="card-header" id="kt_help_header">
                    <h5 class="card-title fw-semibold text-gray-600">
                        Learn & Get Inspired
                    </h5>
                    <div class="card-toolbar">
                        <button
                            type="button"
                            class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                            id="kt_help_close"
                        >
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <rect
                                        opacity="0.5"
                                        x="6"
                                        y="17.3137"
                                        width="16"
                                        height="2"
                                        rx="1"
                                        transform="rotate(-45 6 17.3137)"
                                        fill="currentColor"
                                    />
                                    <rect
                                        x="7.41422"
                                        y="6"
                                        width="16"
                                        height="2"
                                        rx="1"
                                        transform="rotate(45 7.41422 6)"
                                        fill="currentColor"
                                    />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body" id="kt_help_body">
                    <!--begin::Content-->
                    <div
                        id="kt_help_scroll"
                        class="hover-scroll-overlay-y"
                        data-kt-scroll="true"
                        data-kt-scroll-height="auto"
                        data-kt-scroll-wrappers="#kt_help_body"
                        data-kt-scroll-dependencies="#kt_help_header"
                        data-kt-scroll-offset="5px"
                    >
                        <!--begin::Support-->
                        <div
                            class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10"
                        >
                            <!--begin::Heading-->
                            <h2 class="fw-bold mb-5">
                                Support at
                                <a href="https://devs.keenthemes.com" class=""
                                    >devs.keenthemes.com</a
                                >
                            </h2>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fs-5 fw-semibold mb-5">
                                <span class="text-gray-500"
                                    >Join our developers community to find
                                    answer to your question and help
                                    others.</span
                                >
                                <a
                                    class="explore-link d-none"
                                    href="https://keenthemes.com/licensing"
                                    >FAQs</a
                                >
                            </div>
                            <!--end::Description-->
                            <!--begin::Link-->
                            <a
                                href="https://devs.keenthemes.com"
                                class="btn btn-lg explore-btn-primary w-100"
                                >Get Support</a
                            >
                            <!--end::Link-->
                        </div>
                        <!--end::Support-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning"
                            >
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span
                                    class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            opacity="0.3"
                                            d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6"
                            >
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a
                                        href="https://preview.keenthemes.com/html/metronic/docs"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1"
                                        >Documentation & Videos</a
                                    >
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div
                                        class="text-muted fw-semibold fs-7 fs-lg-6"
                                    >
                                        From guides and video tutorials, to live
                                        demos and code examples to get started.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span
                                    class="svg-icon svg-icon-gray-400 svg-icon-2"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            opacity="0.5"
                                            x="18"
                                            y="13"
                                            width="13"
                                            height="2"
                                            rx="1"
                                            transform="rotate(-180 18 13)"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary"
                            >
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                <span
                                    class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            opacity="0.3"
                                            d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6"
                            >
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a
                                        href="https://preview.keenthemes.com/html/metronic/docs//base/utilities"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1"
                                        >Plugins & Components</a
                                    >
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div
                                        class="text-muted fw-semibold fs-7 fs-lg-6"
                                    >
                                        Check out our 300+ in-house components
                                        and customized 3rd-party plugins.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span
                                    class="svg-icon svg-icon-gray-400 svg-icon-2"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            opacity="0.5"
                                            x="18"
                                            y="13"
                                            width="13"
                                            height="2"
                                            rx="1"
                                            transform="rotate(-180 18 13)"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info"
                            >
                                <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                                <span
                                    class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            opacity="0.3"
                                            d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6"
                            >
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a
                                        href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1"
                                        >Layout Builder</a
                                    >
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div
                                        class="text-muted fw-semibold fs-7 fs-lg-6"
                                    >
                                        Build your layout, preview it and export
                                        the HTML for server side integration.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span
                                    class="svg-icon svg-icon-gray-400 svg-icon-2"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            opacity="0.5"
                                            x="18"
                                            y="13"
                                            width="13"
                                            height="2"
                                            rx="1"
                                            transform="rotate(-180 18 13)"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success"
                            >
                                <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                <span
                                    class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            opacity="0.3"
                                            d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            opacity="0.3"
                                            d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6"
                            >
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a
                                        href="https://devs.keenthemes.com/metronic"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1"
                                        >Metronic Downloads</a
                                    >
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div
                                        class="text-muted fw-semibold fs-7 fs-lg-6"
                                    >
                                        Download your prefered framework and
                                        demo with one click.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span
                                    class="svg-icon svg-icon-gray-400 svg-icon-2"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            opacity="0.5"
                                            x="18"
                                            y="13"
                                            width="13"
                                            height="2"
                                            rx="1"
                                            transform="rotate(-180 18 13)"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger"
                            >
                                <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                                <span
                                    class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            opacity="0.3"
                                            d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div
                                class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6"
                            >
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a
                                        href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1"
                                        >What's New ?</a
                                    >
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div
                                        class="text-muted fw-semibold fs-7 fs-lg-6"
                                    >
                                        Latest features and improvements added
                                        with our users feedback in mind.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span
                                    class="svg-icon svg-icon-gray-400 svg-icon-2"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            opacity="0.5"
                                            x="18"
                                            y="13"
                                            width="13"
                                            height="2"
                                            rx="1"
                                            transform="rotate(-180 18 13)"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Help drawer-->
        <!--end::Engage drawers-->
        <!--begin::Engage modals-->
        <!--end::Engage modals-->
        <!--begin::Engage toolbar-->
        <div
            class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2"
        >
            <!--begin::Demos drawer toggle-->
            <button
                id="kt_engage_demos_toggle"
                class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
                title="Check out 30 more demos"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                data-bs-dismiss="click"
                data-bs-trigger="hover"
            >
                <span id="kt_engage_demos_label">Demos</span>
            </button>
            <!--end::Demos drawer toggle-->
            <!--begin::Help drawer toggle-->
            <button
                id="kt_help_toggle"
                class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
                title="Learn & Get Inspired"
                data-bs-toggle="tooltip"
                data-bs-placement="left"
                data-bs-dismiss="click"
                data-bs-trigger="hover"
            >
                Help
            </button>
            <!--end::Help drawer toggle-->
        </div>
        <!--end::Engage toolbar-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect
                        opacity="0.5"
                        x="13"
                        y="6"
                        width="13"
                        height="2"
                        rx="1"
                        transform="rotate(90 13 6)"
                        fill="currentColor"
                    />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor"
                    />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
        <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="assets/js/custom/landing.js"></script>
        <script src="assets/js/custom/pages/pricing/general.js"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>
