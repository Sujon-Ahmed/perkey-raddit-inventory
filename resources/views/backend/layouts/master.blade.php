<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('backend_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('backend_assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('backend_assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend_assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend_assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend_assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('backend_assets/media/logos/favicon.jpg') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="{{ asset('backend_assets/media/logos/favicon.jpg') }}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="index.html" class="brand-logo">
                        <img alt="Logo" src="{{ asset('backend_assets/media/logos/logo.png') }}" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                @include('backend.layouts.aside')
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                @include('backend.layouts.header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    @include('backend.layouts.sub-header')
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Dashboard-->
                            <!--begin::Row-->
                            {{-- <div class="row">
                                <div class="col-xxl-8 order-2 order-xxl-1">
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">New
                                                    Arrivals</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than
                                                    400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_11_1">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab"
                                                            href="#kt_tab_pane_11_2">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                            href="#kt_tab_pane_11_3">Day</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <div class="tab-content mt-5" id="myTabTables11">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel"
                                                    aria-labelledby="kt_tab_pane_11_1">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-40px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-125px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol
                                                                            Application</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">company@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">Laravel,
                                                                            Metronic</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-success label-inline">Success</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/005-bebo.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR
                                                                            Management System</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">hr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-bold">AngularJS,
                                                                            C#</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR
                                                                            Mobile Application</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">ktr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">ReactJS,
                                                                            Ruby</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">In
                                                                            Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant
                                                                            Outstanding</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">bprow@bnc.cc</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">ReactJs,
                                                                            HTML</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-primary label-inline">Approved</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/015-telegram.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application
                                                                            Development</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">app@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">Python,
                                                                            MySQL</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">In
                                                                            Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel"
                                                    aria-labelledby="kt_tab_pane_11_2">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-40px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-125px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/015-telegram.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application
                                                                            Development</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">app@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">Python,
                                                                            MySQL</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">In
                                                                            Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol
                                                                            Application</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">company@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">Laravel,
                                                                            Metronic</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-success label-inline">Success</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/005-bebo.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR
                                                                            Management System</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">hr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-bold">AngularJS,
                                                                            C#</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant
                                                                            Outstanding</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">bprow@bnc.cc</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">ReactJs,
                                                                            HTML</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-primary label-inline">Approved</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none" stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR
                                                                            Mobile Application</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">ktr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">ReactJS,
                                                                            Ruby</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">In
                                                                            Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade show active" id="kt_tab_pane_11_3"
                                                    role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-40px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-125px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div
                                                                            class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant
                                                                            Outstanding</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">bprow@bnc.cc</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">ReactJs,
                                                                            HTML</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-primary label-inline">Approved</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/015-telegram.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application
                                                                            Development</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">app@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">Python,
                                                                            MySQL</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">In
                                                                            Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/003-puzzle.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol
                                                                            Application</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">company@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">Laravel,
                                                                            Metronic</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-success label-inline">Success</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/005-bebo.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR
                                                                            Management System</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">hr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-bold">AngularJS,
                                                                            C#</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/014-kickstarter.svg"
                                                                                    class="h-50 align-self-center"
                                                                                    alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#"
                                                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR
                                                                            Mobile Application</a>
                                                                        <div>
                                                                            <span
                                                                                class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary"
                                                                                href="#">ktr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                        <span
                                                                            class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="text-muted font-weight-500">ReactJS,
                                                                            Ruby</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span
                                                                            class="label label-lg label-light-warning label-inline">In
                                                                            Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                            fill="#000000" />
                                                                                        <path
                                                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path
                                                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span
                                                                                class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    width="24px" height="24px"
                                                                                    viewBox="0 0 24 24"
                                                                                    version="1.1">
                                                                                    <g stroke="none"
                                                                                        stroke-width="1"
                                                                                        fill="none"
                                                                                        fill-rule="evenodd">
                                                                                        <rect x="0"
                                                                                            y="0"
                                                                                            width="24"
                                                                                            height="24" />
                                                                                        <path
                                                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero" />
                                                                                        <path
                                                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                            fill="#000000"
                                                                                            opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                @include('backend.layouts.footer')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
    @include('backend.layouts.user-profile')
    <!-- end::User Panel-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2"
                        height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('backend_assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend_assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('backend_assets/js/scripts.bundle.js') }}"></script>
    <script src="https://keenthemes.com/metronic/assets/js/engage_code.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('backend_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('backend_assets/js/pages/widgets.js') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
