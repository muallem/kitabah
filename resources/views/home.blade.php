<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kitabah</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="{{asset('storage/app/public/bootstrap5/dist/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/public/bootstrap5/dist/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('storage/app/public/bootstrap5/dist/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('storage/app/public/bootstrap5/dist/assets/css/color_skins.css')}}">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
          <style>
            .card .body {
                font-size: 15px;
            }
    
            .main_features li {
                line-height: 35px;
            }
    
            .main_features li.divider {
                border-bottom: 1px solid #ececec;
                margin: 10px 0;
                list-style: none;
                font-size: 12px;
                text-transform: uppercase;
                line-height: 1;
                color: #ff0000;
                padding-top: 15px;
            }
        </style>
    </head>
    
    
<body class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/img/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>

                <div class="navbar-brand">
                    <a href="#"><img src="assets/img/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i
                                        class="icon-calendar"></i></a>
                            </li>
                            <li>
                                <a href="#" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                            </li>
                            <li>
                                <a href="#" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span
                                        class="notification-dot"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="header"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Campaign <strong>Holiday Sale</strong> is nearly
                                                        reach budget limit.</p>
                                                    <span class="timestamp">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-like text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Your New Campaign <strong>Holiday Sale</strong> is
                                                        approved.</p>
                                                    <span class="timestamp">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-pie-chart text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Website visits from Twitter is 27% higher than last
                                                        week.</p>
                                                    <span class="timestamp">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Error on website analytics configurations</p>
                                                    <span class="timestamp">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="footer"><a href="javascript:void(0);" class="more">See all
                                            notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu"
                                    data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                                <ul class="dropdown-menu user-menu menu-icon">
                                    <li class="menu-heading">ACCOUNT SETTINGS</li>
                                    <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="icon-equalizer"></i>
                                            <span>Preferences</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="icon-bell"></i>
                                            <span>Notifications</span></a></li>
                                    <li class="menu-heading">BILLING</li>
                                    <li><a href="javascript:void(0);"><i class="icon-credit-card"></i>
                                            <span>Payments</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-printer"></i>
                                            <span>Invoices</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-refresh"></i>
                                            <span>Renewals</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="icon-menu"><i class="icon-login"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div id="left-sidebar" class="sidebar">
            <div class="sidebar-scroll">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="active"><a href="#documenter_cover"><span>Start </span></a></li>
                        <li><a href="#overview"><span>Overview</span></a></li>
                        <li><a href="#features"><span>Features</span></a></li>
                        <li><a href="#template"><span>Template</span></a></li>
                        <li><a href="#grunt_file"><span>Grunt File</span></a></li>
                        <li><a href="#main_content"><span>Main Content</span></a></li>
                        <li><a href="#folder_structure"><span>Folder Structure</span></a></li>
                        <li><a href="#SCSS"><span>SCSS</span></a></li>
                        <li><a href="#javascript"><span>Javascript</span></a></li>
                        <li><a href="#fonts"><span>Fonts</span></a></li>
                        <li><a href="#thank_you"><span>THANK YOU!</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Documentation</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Documentation</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                            <div class="bh_chart hidden-xs">
                                <div class="float-left m-r-15">
                                    <small>Visitors</small>
                                    <h6 class="mb-0 mt-1"><i class="icon-user"></i> 1,784</h6>
                                </div>
                                <span class="bh_visitors float-right">2,5,1,8,3,6,7,5</span>
                            </div>
                            <div class="bh_chart hidden-sm">
                                <div class="float-left m-r-15">
                                    <small>Visits</small>
                                    <h6 class="mb-0 mt-1"><i class="icon-globe"></i> 325</h6>
                                </div>
                                <span class="bh_visits float-right">10,8,9,3,5,8,5</span>
                            </div>
                            <div class="bh_chart hidden-sm">
                                <div class="float-left m-r-15">
                                    <small>Chats</small>
                                    <h6 class="mb-0 mt-1"><i class="icon-bubbles"></i> 13</h6>
                                </div>
                                <span class="bh_chats float-right">1,8,5,6,2,4,3,2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="card" id="documenter_cover">
                            <div class="header">
                                <h2>Start Lucid</h2>
                            </div>
                            <div class="body">
                                <h3 class="m-b-25">Lucid HR - Everything you need for your Bootstrap 4 Webapp</h3>
                                <ul>
                                    <li>Created: 03-July-2018</li>
                                    <li>latest update: 04-July-2023</li>
                                </ul>
                                <p>Thank you for purchasing our template. If you have any questions that are beyond the scope of this help file, please feel free to email at wraptheme@gmail.com</p>
                                <p>If you really like our work, design, performance and support then <a href="https://themeforest.net/downloads"> please don't forgot to rate us</a> on Themeforest,<br> it really motivate us to provide something better.
                                    <span>
                                        <i class="fa fa-star text-warning m-r-5"></i>
                                        <i class="fa fa-star text-warning m-r-5"></i>
                                        <i class="fa fa-star text-warning m-r-5"></i>
                                        <i class="fa fa-star text-warning m-r-5"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="overview">
                            <div class="header">
                                <h2>Brief Overview</h2>
                            </div>
                            <div class="body">
                                <p>Lucid is a popular open source WebApp template for admin dashboards and admin panels. It’s responsive HTML template, which is based on the Bootstrap 4X framework. It utilizes all of the Bootstrap components in design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications.</p>
                                <p class="m-b-20">Lucid is based on a modular design, which allows it to be easily customised and built upon any backend project in no-time. Our documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <i class="fa fa-heart fa-2x"></i>
                                        <h6 class="m-t-20">Bootstrap 5.3.0 Framework</h6>
                                        <p class="text-muted">Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <i class="fa fa-gear fa-2x "></i>
                                        <h6 class="m-t-20">Easily Customizable</h6>
                                        <p class="text-muted">The internet is society’s true equalizer. It gives voices to the masses, as people from across the world can now express their opinions and ideals. Not since the industrial revolution, has humanity experienced such a game-changing invention.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <i class="fa fa-html5 fa-2x"></i>
                                        <h6 class="m-t-20 ">HTML5/CSS3</h6>
                                        <p class="text-muted">HTML5 is a core technology markup language of the Internet used for structuring and presenting content for the World Wide Web.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <i class="fa fa-power-off fa-2x"></i>
                                        <h6 class="m-t-20">Integrated plugins</h6>
                                        <p class="text-muted">You can enable one or more of the integrated Apache Cordova plugins to extend the functionality of your app. The integrated plugins are custom Apache Cordova plugins that the AppBuilder team modifies, configures and updates regularly.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <i class="fa fa-laptop fa-2x"></i>
                                        <h6 class="m-t-20">Responsive layout</h6>
                                        <p class="text-muted">Let this collection of responsive designed websites across a variety of website types help get your creative and developer juices flowing. Each site features a screenshot across 4 device widths and you can see the media queries.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 text-center">
                                        <i class="fa fa-flag fa-2x"></i>
                                        <h6 class="m-t-20">Most advanced</h6>
                                        <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="features">
                            <div class="header">
                                <h2>Main Features</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <ul class="main_features">
                                            <li><strong><a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank" rel="nofollow">Bootstrap</a> v5.3.0</strong> Separate Version in .zip</li>
                                            <li><strong><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a> 4x</strong></li>
                                            <li>Latest <strong><a href="https://jquery.com/" target="_blank">jQuery v3x</a></strong></li>
                                            <li>Built in <strong><a href="http://sass-lang.com/" target="_blank">SASS</a></strong></li>
                                            <li>JS Bundling Ready (<strong>Bundle</strong>) <span class="badge badge-default m-b-0">New</span></li>
                                            <li>RTL Support</li>

                                            <li class="divider">Lucid</li>
                                            <li><strong>6 Unique</strong> Color Scheme</li>
                                            <li>500+ Use Full Pages (No extra pages)</li>
                                            <li>Fully <strong>Responsive</strong> & Interactive</li>
                                            <li>Elegant & Clean User Interface</li>
                                            <li>50+ Ready to used <strong>widget</strong></li>
                                            <li>3000+ Icons</li>
                                            <li>Detailed Documentation</li>
                                            <li>Expanded and Collapsed Menu (Multi Menu Levels)</li>
                                            <li>Google fonts (<a href="https://fonts.google.com/specimen/Ubuntu" target="_blank">Ubuntu</a>)</li>

                                            <li class="divider">Ready to Use Application</li>
                                            <li><strong>Inbox</strong> Full App <span class="badge badge-default m-b-0">New</span></li>
                                            <li><strong>Chat App</strong> <span class="badge badge-default m-b-0">New</span></li>
                                            <li><strong>Calendar</strong> integration</li>
                                            <li>Scrum/Kanban type <strong>Taskboard</strong></li>

                                            <li class="divider">Many Charts Options</li>
                                            <li>Morris</li>
                                            <li>ChartJS</li>
                                            <li>Knob</li>
                                            <li>Flot</li>
                                            <li>C3 Chart</li>
                                            <li>Gauges Chart</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <ul class="main_features">
                                            <li class="divider">HR Features</li>
                                            <li>Holidays</li>
                                            <li>Employees Activities</li>
                                            <li>Employees Leave Requests</li>
                                            <li>Employees Attendance</li>
                                            <li>Accounts Payments</li>
                                            <li>Payroll</li>
                                            <li>Employee Salary</li>
                                            <li>Users Module Permission</li>
                                            <li>Projects List</li>
                                            <li>Projects TaskBoard</li>
                                            <li>Support Tickets</li>

                                            <li class="divider">User</li>
                                            <li>Invoice</li>
                                            <li>Invoice V2<span class="badge badge-default m-b-0">New</span></li>
                                            <li>User <strong>Profile</strong> Page </li>
                                            <li>User <strong>Profile V2</strong> Page <span class="badge badge-default m-b-0">New</span></li>
                                            <li>Image Gallery (Bootstrap 4 Gallery)</li>
                                            <li>Image Gallery V2</li>
                                            <li>Messenger Notifications</li>
                                            <li>Timeline <span class="badge badge-default m-b-0">New</span></li>
                                            <li>Timeline Horizontal</li>

                                            <li class="divider">Editor</li>
                                            <li>Summernote</li>
                                            <li>CKEditor</li>
                                            <li>Markdown</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <ul class="main_features">
                                            <li class="divider">Lots of Table Examples</li>
                                            <li>Jquery <strong>Datatable</strong></li>
                                            <li><strong>Editable</strong> Tables</li>
                                            <li>Table <strong>Dragger</strong></li>
                                            <li>Table <strong>Filter</strong></li>
                                            <li>Responsive Tables</li>

                                            <li class="divider">Forms</li>
                                            <li>Form Examples</li>
                                            <li>Form <strong>Validation</strong></li>
                                            <li><strong>Advanced</strong> Form Elements</li>
                                            <li>Form <strong>Wizard</strong></li>

                                            <li class="divider">Form Elements</li>
                                            <li><strong>Color</strong> Pickers</li>
                                            <li>Masked Text Inputs</li>
                                            <li>Multi Select</li>
                                            <li><strong>Tags</strong> Input</li>
                                            <li>Input Slider</li>
                                            <li>Date Picker</li>

                                            <li class="divider">Elements</li>
                                            <li>Drag & Drop Upload</li>
                                            <li>Image Cropping</li>
                                            <li>Sortable & Nestable</li>
                                            <li>Treeview</li>
                                            <li>Progress Bars</li>
                                            <li>Range Sliders</li>
                                            <li><strong>Sweet Alert</strong> Dialog</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="alert alert-success" role="alert">
                                    <p class="mb-0"><strong>Authentication:-</strong> login, lock screen, Sign Up, Forgot Password, Lockscreen, 404, 500 Error Pages</p>
                                    <p class="mb-0"><strong>Widgets:-</strong>Liks Statistics, Data, Chart, Weather, Social</p>
                                    <p class="mb-0"><strong>Note:-</strong> Works well in all latest browsers like Chrome, Firefox, Safari, Microsoft Edge, IE11+</p>
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Note:-</strong> jQuery plugin dependencies may relay on used platform and their versions.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="template">
                            <div class="header">
                                <h2>Main Template</h2>
                            </div>
                            <div class="body">
                                <p><img alt="" src="doc/images/1.png" class="img-fluid"></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Main</strong> HTML Structre</h2>
                            </div>
                            <div class="body">
                                <p><img alt="" src="doc/images/html.png" class="img-fluid"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="grunt_file">
                            <div class="header">
                                <h2>Grunt File & Installation <small>The JavaScript Task Runner.</small></h2>
                            </div>
                            <div class="body m-b-10">
                                <p><strong>Installing Grunt:</strong> Run <code>npm install grunt --save-dev</code> command from your teminal to install grunt within your project.</p>
                                <p><strong>Grunt Sass:</strong> Run <code>grunt sass</code> command from your project directory. It will compile SASS to CSS for the project. This will read the file `assets/scss/filename.scss` and output a plain-css file to `/assets/css/filename.css`. </p>
                                <p><strong>Grunt JSHint:</strong> Run <code>grunt jshint</code> command from your project directory. It will checks all *.js files under `assetsjs/filename` for common syntax or coding errors using the JSHint utility.</p>
                                <p><strong>Grunt Sprite:</strong> Run <code>grunt sprite</code> command from your project directory. </p>
                                <p><strong>Further help:</strong> To get more help on the grunt checkout <a href="https://gruntjs.com/getting-started">Grunt</a></p>
                                <p><strong>Note:</strong> However, any SASS code you write must be able compile via Grunt as well.It will generate pre-compiled javascript templates. Reads all the *.html files from `assets/js/filename` and outputs `assets/js/filename.templates.js`. Template.js will contains code of UI design and will be change each time you build solution through above command.</p>
                            </div>
                            <div class="body">
                                <p><a href="https://gruntjs.com/" target="_blank"><strong>Grunt</strong></a> is a JavaScript task runner, a tool used to automatically perform frequent tasks such as minification, compilation, unit testing, and linting. It uses a command-line interface to run custom tasks defined in a file.</p>
                                <img alt="" src="doc/images/4.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="main_content">
                            <div class="header">
                                <h2>Main Content</h2>
                            </div>
                            <div class="body">
                                <pre class="prettyprint lang-html linenums">
&lt;!-- START CONTENT --&gt;
&lt;div class="page-loader-wrapper"&gt;
    &lt;div class="loader"&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="navbar navbar-fixed-top"&gt;
    &lt;div class="container-fluid"&gt;
        &lt;div class="row clearfix"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div id="left-sidebar" class="sidebar"&gt;
    &lt;div class="container"&gt;
        &lt;div class="row clearfix"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;


&lt;div id="main-content"&gt;
    &lt;div class="container-fluid"&gt;
        &lt;div class="row clearfix"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- END CONTENT --&gt;
</pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="folder_structure">
                            <div class="header">
                                <h2>Folder Structure</h2>
                            </div>
                            <div class="body">
<pre class="prettyprint"><span class="pln">LUCID-HR</span>
</span><span class="pun">├─</span><span class="pln"> Bootstrap4</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> assets</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> dark</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> high-contrast</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> h-menu</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> js</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> light</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> mini-sidebar</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> rtl</span><span class="pun">/</span>

</span><span class="pun">├─</span><span class="pln"> Bootstrap5</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> dist</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   </span><span class="pln"><span class="pun">   ├─</span><span class="pln"></span> assets</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   </span><span class="pln"><span class="pun">   ├─</span><span class="pln"></span> horizontal</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   </span><span class="pln"><span class="pun">   ├─</span><span class="pln"></span> sidebar-mini</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> js</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> scss</span><span class="pun">/</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> Gruntfile.js</span>
</span><span class="pun"></span><span class="pun">   ├─</span><span class="pln"> package.json</span>

</span><span class="pun">├─</span><span class="pln"> Documentation</span>
</pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="SCSS">
                            <div class="header">
                                <h2>SCSS Structure</h2>
                            </div>
                            <div class="body">
                                <blockquote>
                                    <p class="blockquote blockquote-primary">
                                        Please note that all Detail main Web Site, you need to set it up on your project
                                        <a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html"
                                            class="col-blue" target="_blank">Click Here..</a>
                                        <br>
                                        <br>
                                        <small>
                                            - <strong>SCSS</strong>
                                        </small>
                                    </p>
                                </blockquote>
                                <p>main.css is the main CSS file located in assets/css/ folder of the package. Whole CSS
                                    file is well indexed with topic and its related code.</p>
                                <img alt="" src="doc/images/9.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="javascript">
                            <div class="header">
                                <h2>Javascript</h2>
                            </div>
                            <div class="body">
                                <p>Lucid admin.js is the mail javascript file having all the js code. File is located in assets/js/ folder. This file code is also well formatted and section in different respective function names.</p>
                                <p class="m-b-30">Along with this chart library based js code and dashboard based js code are added in separate files for ease of use of user.</p>
                                <p><img alt="" src="doc/images/8.png" class="img-fluid"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="fonts">
                            <div class="header">
                                <h2>Font Used</h2>
                            </div>
                            <div class="body">
                                <p>Google fonts are used in the template. They are as follows: <a href="https://fonts.google.com/specimen/Ubuntu">Ubuntu</a></p>
                                <p>Font Awesome: <a href="https://fontawesome.com/v4.7.0/">Click to See</a></p>
                                <p>All Images are used: <a href="https://www.pexels.com/">Pexels.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card" id="thank_you">
                            <div class="header">
                                <h2>THANK YOU!</h2>
                            </div>
                            <div class="body">
                                <p> Once again, thank you so much for purchasing this template. As I said at the beginning, I&#39;d be glad to help you if you have any questions relating to this template.</p>
                                <p>If you really like our work, design, performance and support then <a href="https://themeforest.net/downloads"> please don't forgot to rate us</a> on Themeforest, it really motivate us to provide something better.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="{{asset('storage/app/public/bootstrap5/dist/assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('storage/app/public/bootstrap5/dist/assets/bundles/vendorscripts.bundle.js')}}"></script>

    <script src="{{asset('storage/app/public/bootstrap5/dist/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script>
        $('.metismenu li').click(function () {
            var $this = $(this);
            if (!$this.is('active')) {
                $('.metismenu li').removeClass('active').removeData("top");
                $this.addClass('active').data("top", $this.offset().top);
            }
        });
        document.createElement('section');
        var duration = '500',
            easing = 'swing';

        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    </script>
</body>
</html>
