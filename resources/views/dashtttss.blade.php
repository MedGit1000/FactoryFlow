<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FactoryFlow</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }} " sizes="16x16">
    {

    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{ asset('assets1/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/dataTables.min.css ') }}">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/editor-katex.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/editor.atom-one-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/editor.quill.snow.css') }}">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/flatpickr.min.css') }}">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/full-calendar.css') }}">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/jquery-jvectormap-2.0.5.css') }}">
    <!-- Popup css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/magnific-popup.css') }}">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/slick.css') }}">
    <!-- prism css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/prism.css') }}">
    <!-- file upload css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/file-upload.css') }}">

    <link rel="stylesheet" href="{{ asset('assets1/css/lib/audioplayer.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    }
</head>

<body>
    <aside class="sidebar">
        <button type="button" class="sidebar-close-btn">
            <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
        </button>
        <div>
            <a href="index.html" class="sidebar-logo">
                <img src="{{ asset('favicon.ico') }}" alt="site logo" class="light-logo">
                <img src="{{ asset('favicon.ico') }}" alt="site logo" class="dark-logo" sizes="50x50"> FactoryFlow
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a class="nav-link {{ request()->routeIs('inventory*') ? 'active' : '' }}"
                                href="{{ route('inventory.index') }}"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Stock</a>
                        </li>
                        <li>
                            <a href="index-2.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Production</a>
                        </li>
                        <li>
                            <a href="index-3.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Orders</a>
                        </li>
                        <li>
                            <a href="index-4.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Employees</a>
                        </li>
                        <li>
                            <a href="index-5.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Investment</a>
                        </li>
                        <li>
                            <a href="index-6.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i>
                                LMS</a>
                        </li>
                        <li>
                            <a href="index-7.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                NFT
                                & Gaming</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-menu-group-title">Application</li>
                <li>
                    <a href="email.html">
                        <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                        <span>Email</span>
                    </a>
                </li>
                <li>
                    <a href="chat-message.html">
                        <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
                        <span>Chat</span>
                    </a>
                </li>
                <li>
                    <a href="calendar-main.html">
                        <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="kanban.html">
                        <iconify-icon icon="material-symbols:map-outline" class="menu-icon"></iconify-icon>
                        <span>Kanban</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                        <span>Invoice</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="invoice-list.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
                        </li>
                        <li>
                            <a href="invoice-preview.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Preview</a>
                        </li>
                        <li>
                            <a href="invoice-add.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Add new</a>
                        </li>
                        <li>
                            <a href="invoice-edit.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-robot-2-line"></i>
                        <span>Ai Application</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="text-generator.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Text Generator</a>
                        </li>
                        <li>
                            <a href="code-generator.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Code Generator</a>
                        </li>
                        <li>
                            <a href="image-generator.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Image Generator</a>
                        </li>
                        <li>
                            <a href="voice-generator.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Voice Generator</a>
                        </li>
                        <li>
                            <a href="video-generator.html"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i> Video
                                Generator</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-robot-2-line"></i>
                        <span>Crypto Currency</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="wallet.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Wallet</a>
                        </li>
                        <li>
                            <a href="marketplace.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Marketplace</a>
                        </li>
                        <li>
                            <a href="marketplace-details.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Marketplace
                                Details</a>
                        </li>
                        <li>
                            <a href="portfolio.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Portfolios</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-group-title">UI Elements</li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                        <span>Components</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="typography.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Typography</a>
                        </li>
                        <li>
                            <a href="colors.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Colors</a>
                        </li>
                        <li>
                            <a href="button.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Button</a>
                        </li>
                        <li>
                            <a href="dropdown.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i>
                                Dropdown</a>
                        </li>
                        <li>
                            <a href="alert.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Alerts</a>
                        </li>
                        <li>
                            <a href="card.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Card</a>
                        </li>
                        <li>
                            <a href="carousel.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Carousel</a>
                        </li>
                        <li>
                            <a href="avatar.html"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Avatars</a>
                        </li>
                        <li>
                            <a href="progress.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Progress bar</a>
                        </li>
                        <li>
                            <a href="tabs.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Tab & Accordion</a>
                        </li>
                        <li>
                            <a href="pagination.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Pagination</a>
                        </li>
                        <li>
                            <a href="badges.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Badges</a>
                        </li>
                        <li>
                            <a href="tooltip.html"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i>
                                Tooltip & Popover</a>
                        </li>
                        <li>
                            <a href="videos.html"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i>
                                Videos</a>
                        </li>
                        <li>
                            <a href="star-rating.html"><i class="ri-circle-fill circle-icon text-indigo w-auto"></i>
                                Star Ratings</a>
                        </li>
                        <li>
                            <a href="tags.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Tags</a>
                        </li>
                        <li>
                            <a href="list.html"><i class="ri-circle-fill circle-icon text-red w-auto"></i> List</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="ri-circle-fill circle-icon text-yellow w-auto"></i>
                                Calendar</a>
                        </li>
                        <li>
                            <a href="radio.html"><i class="ri-circle-fill circle-icon text-orange w-auto"></i>
                                Radio</a>
                        </li>
                        <li>
                            <a href="switch.html"><i class="ri-circle-fill circle-icon text-pink w-auto"></i>
                                Switch</a>
                        </li>
                        <li>
                            <a href="image-upload.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
                        <span>Forms</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="form.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Input Forms</a>
                        </li>
                        <li>
                            <a href="form-layout.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input Layout</a>
                        </li>
                        <li>
                            <a href="form-validation.html"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form
                                Validation</a>
                        </li>
                        <li>
                            <a href="wizard.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Form Wizard</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                        <span>Table</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="table-basic.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
                        </li>
                        <li>
                            <a href="table-data.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                        <span>Chart</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="line-chart.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line Chart</a>
                        </li>
                        <li>
                            <a href="column-chart.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column Chart</a>
                        </li>
                        <li>
                            <a href="pie-chart.html"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie Chart</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html">
                        <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
                        <span>Widgets</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                        <span>Users</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="users-list.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
                        </li>
                        <li>
                            <a href="users-grid.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
                        </li>
                        <li>
                            <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                Add User</a>
                        </li>
                        <li>
                            <a href="view-profile.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View Profile</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-user-settings-line"></i>
                        <span>Role & Access</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="role-access.html"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Role & Access</a>
                        </li>
                        <li>
                            <a href="assign-role.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Assign Role</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-group-title">Application</li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
                        <span>Authentication</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="sign-in.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Sign In</a>
                        </li>
                        <li>
                            <a href="sign-up.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                Sign Up</a>
                        </li>
                        <li>
                            <a href="forgot-password.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="gallery.html">
                        <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
                        <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="pricing.html">
                        <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
                        <span>Pricing</span>
                    </a>
                </li>
                <li>
                    <a href="faq.html">
                        <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
                        <span>FAQs.</span>
                    </a>
                </li>
                <li>
                    <a href="error.html">
                        <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
                        <span>404</span>
                    </a>
                </li>
                <li>
                    <a href="terms-condition.html">
                        <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
                        <span>Terms & Conditions</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                        <span>Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Company</a>
                        </li>
                        <li>
                            <a href="notification.html"><i
                                    class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
                        </li>
                        <li>
                            <a href="notification-alert.html"><i
                                    class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification
                                Alert</a>
                        </li>
                        <li>
                            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Theme</a>
                        </li>
                        <li>
                            <a href="currencies.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
                        </li>
                        <li>
                            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                Languages</a>
                        </li>
                        <li>
                            <a href="payment-gateway.html"><i
                                    class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment
                                Gateway</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <main class="dashboard-main">
        <div class="navbar-header">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <button type="button" class="sidebar-toggle">
                            <iconify-icon icon="heroicons:bars-3-solid"
                                class="icon text-2xl non-active"></iconify-icon>
                            <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
                        </button>
                        <button type="button" class="sidebar-mobile-toggle">
                            <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
                        </button>
                        <form class="navbar-search">
                            <input type="text" name="search" placeholder="Search">
                            <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                        </form>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" data-theme-toggle
                            class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
                        <div class="dropdown d-none d-sm-inline-block">
                            <button
                                class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown">
                                <img src="{{ asset('assets1/images/lang-flag.png') }}" alt="image"
                                    class="w-24 h-24 object-fit-cover rounded-circle">
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-sm">
                                <div
                                    class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your Language
                                        </h6>
                                    </div>
                                </div>

                                <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="english">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag1.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">English</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="english">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="japan">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag2.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Japan</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="japan">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="france">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag3.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">France</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="france">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="germany">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag4.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Germany</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="germany">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="korea">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag5.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">South Korea</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="korea">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="bangladesh">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag6.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Bangladesh</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="bangladesh">
                                    </div>

                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="india">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag7.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">India</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="india">
                                    </div>
                                    <div
                                        class="form-check style-check d-flex align-items-center justify-content-between">
                                        <label class="form-check-label line-height-1 fw-medium text-secondary-light"
                                            for="canada">
                                            <span
                                                class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                                <img src="{{ asset('assets1/images/flags/flag8.png') }}"
                                                    alt=""
                                                    class="w-36-px h-36-px bg-success-subtle text-success-main rounded-circle flex-shrink-0">
                                                <span class="text-md fw-semibold mb-0">Canada</span>
                                            </span>
                                        </label>
                                        <input class="form-check-input" type="radio" name="crypto"
                                            id="canada">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Language dropdown end  --}}

                        <div class="dropdown">
                            <button
                                class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown">
                                <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-lg p-0">
                                <div
                                    class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-0">Message</h6>
                                    </div>
                                    <span
                                        class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
                                </div>

                                <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="{{ asset('assets1/images/notification/profile-3.png') }}"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i'm...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="{{ asset('assets1/images/notification/profile-4.png') }}"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px  bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i'm...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">2</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="{{ asset('') }}/images/notification/profile-5.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="{{ asset('assets1/images/notification/profile-6.png') }}"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-neutral-300 rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i'm...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-neutral-400 rounded-circle">0</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 position-relative">
                                                <img src="{{ asset('') }}/images/notification/profile-7.png"
                                                    alt="">
                                                <span
                                                    class="w-8-px h-8-px bg-success-main rounded-circle position-absolute end-0 bottom-0"></span>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Kathryn Murphy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey! there
                                                    i’m...</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-sm text-secondary-light flex-shrink-0">12:30 PM</span>
                                            <span
                                                class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                                        </div>
                                    </a>

                                </div>
                                <div class="text-center py-12 px-16">
                                    <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See
                                        All
                                        Message</a>
                                </div>
                            </div>
                        </div>
                        {{-- Message dropdown end  --}}

                        <div class="dropdown">
                            <button
                                class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                type="button" data-bs-toggle="dropdown">
                                <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-lg p-0">
                                <div
                                    class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications</h6>
                                    </div>
                                    <span
                                        class="text-primary-600 fw-semibold text-lg w-40-px h-40-px rounded-circle bg-base d-flex justify-content-center align-items-center">05</span>
                                </div>

                                <div class="max-h-400-px overflow-y-auto scroll-sm pe-4">
                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                <iconify-icon icon="bitcoin-icons:verify-outline"
                                                    class="icon text-xxl"></iconify-icon>
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Congratulations</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Your
                                                    profile
                                                    has been Verified. Your profile has been Verified</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                <img src="{{ asset('') }}/images/notification/profile-1.png"
                                                    alt="">
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Ronald Richards</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">You can
                                                    stitch between artboards</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                AM
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Arlene McCoy</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you
                                                    to prototyping</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between bg-neutral-50">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-success-subtle text-success-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                <img src="{{ asset('') }}/images/notification/profile-2.png"
                                                    alt="">
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Annette Black</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you
                                                    to prototyping</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>

                                    <a href="javascript:void(0)"
                                        class="px-24 py-12 d-flex align-items-start gap-3 mb-2 justify-content-between">
                                        <div
                                            class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-3">
                                            <span
                                                class="w-44-px h-44-px bg-info-subtle text-info-main rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                                                DR
                                            </span>
                                            <div>
                                                <h6 class="text-md fw-semibold mb-4">Darlene Robertson</h6>
                                                <p class="mb-0 text-sm text-secondary-light text-w-200-px">Invite you
                                                    to prototyping</p>
                                            </div>
                                        </div>
                                        <span class="text-sm text-secondary-light flex-shrink-0">23 Mins ago</span>
                                    </a>
                                </div>

                                <div class="text-center py-12 px-16">
                                    <a href="javascript:void(0)" class="text-primary-600 fw-semibold text-md">See
                                        All
                                        Notification</a>
                                </div>

                            </div>
                        </div>
                        {{-- Notification dropdown end  --}}
                        <div>{{ auth()->user()->name }}</div>

                        <div class="dropdown">
                            <button class="d-flex justify-content-center align-items-center rounded-circle"
                                type="button" data-bs-toggle="dropdown">
                                <img src="{{ asset('assets1/images/user.png') }}" alt="image"
                                    class="w-40-px h-40-px object-fit-cover rounded-circle">
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-sm">
                                <div
                                    class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-2">
                                            {{ auth()->user()->name }}</h6>
                                        <span class="text-secondary-light fw-medium text-sm">Admin</span>
                                    </div>
                                    <button type="button" class="hover-text-danger">
                                        <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                                    </button>
                                </div>
                                <ul class="to-top-list">
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="view-profile.html">
                                            <iconify-icon icon="solar:user-linear"
                                                class="icon text-xl"></iconify-icon> My Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="email.html">
                                            <iconify-icon icon="tabler:message-check"
                                                class="icon text-xl"></iconify-icon> Inbox</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="company.html">
                                            <iconify-icon icon="icon-park-outline:setting-two"
                                                class="icon text-xl"></iconify-icon> Setting</a>
                                    </li>
                                    <li>
                                        {{-- <a href=" {{ route('logout') }}"
                                            class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3">
                                            <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log
                                            Out</a> --}}
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button
                                                class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"><iconify-icon
                                                    icon="lucide:power" class="icon text-xl"></iconify-icon> Log
                                                Out</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- Profile dropdown end  --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-main-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Dashboard</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                </ul>
            </div>

            <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
                <div class="col">
                    <div class="card shadow-none border bg-gradient-start-1 h-100">
                        <div class="card-body p-20">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                <div>
                                    <p class="fw-medium text-primary-light mb-1">Total Users</p>
                                    <h6 class="mb-0">20,000</h6>
                                </div>
                                <div
                                    class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                                    <iconify-icon icon="gridicons:multiple-users"
                                        class="text-white text-2xl mb-0"></iconify-icon>
                                </div>
                            </div>
                            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                                <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                        icon="bxs:up-arrow" class="text-xs"></iconify-icon> +5000</span>
                                Last 30 days users
                            </p>
                        </div>
                    </div>
                    {{-- card end  --}}
                </div>
                <div class="col">
                    <div class="card shadow-none border bg-gradient-start-2 h-100">
                        <div class="card-body p-20">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                <div>
                                    <p class="fw-medium text-primary-light mb-1">Total Subscription</p>
                                    <h6 class="mb-0">15,000</h6>
                                </div>
                                <div
                                    class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                                    <iconify-icon icon="fa-solid:award"
                                        class="text-white text-2xl mb-0"></iconify-icon>
                                </div>
                            </div>
                            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                                <span class="d-inline-flex align-items-center gap-1 text-danger-main"><iconify-icon
                                        icon="bxs:down-arrow" class="text-xs"></iconify-icon> -800</span>
                                Last 30 days subscription
                            </p>
                        </div>
                    </div>
                    {{-- card end  --}}
                </div>
                <div class="col">
                    <div class="card shadow-none border bg-gradient-start-3 h-100">
                        <div class="card-body p-20">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                <div>
                                    <p class="fw-medium text-primary-light mb-1">Total Free Users</p>
                                    <h6 class="mb-0">5,000</h6>
                                </div>
                                <div
                                    class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                                    <iconify-icon icon="fluent:people-20-filled"
                                        class="text-white text-2xl mb-0"></iconify-icon>
                                </div>
                            </div>
                            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                                <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                        icon="bxs:up-arrow" class="text-xs"></iconify-icon> +200</span>
                                Last 30 days users
                            </p>
                        </div>
                    </div>
                    {{-- card end  --}}
                </div>
                <div class="col">
                    <div class="card shadow-none border bg-gradient-start-4 h-100">
                        <div class="card-body p-20">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                <div>
                                    <p class="fw-medium text-primary-light mb-1">Total Income</p>
                                    <h6 class="mb-0">$42,000</h6>
                                </div>
                                <div
                                    class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                                    <iconify-icon icon="solar:wallet-bold"
                                        class="text-white text-2xl mb-0"></iconify-icon>
                                </div>
                            </div>
                            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                                <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                        icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$20,000</span>
                                Last 30 days income
                            </p>
                        </div>
                    </div>
                    {{-- card end  --}}
                </div>
                <div class="col">
                    <div class="card shadow-none border bg-gradient-start-5 h-100">
                        <div class="card-body p-20">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                <div>
                                    <p class="fw-medium text-primary-light mb-1">Total Expense</p>
                                    <h6 class="mb-0">$30,000</h6>
                                </div>
                                <div
                                    class="w-50-px h-50-px bg-red rounded-circle d-flex justify-content-center align-items-center">
                                    <iconify-icon icon="fa6-solid:file-invoice-dollar"
                                        class="text-white text-2xl mb-0"></iconify-icon>
                                </div>
                            </div>
                            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                                <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon
                                        icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$5,000</span>
                                Last 30 days expense
                            </p>
                        </div>
                    </div>
                    {{-- card end  --}}
                </div>
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-xxl-6 col-xl-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <h6 class="text-lg mb-0">Sales Statistic</h6>
                                <select class="form-select bg-base form-select-sm w-auto">
                                    <option>Yearly</option>
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Today</option>
                                </select>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-2 mt-8">
                                <h6 class="mb-0">$27,200</h6>
                                <span
                                    class="text-sm fw-semibold rounded-pill bg-success-focus text-success-main border br-success px-8 py-4 line-height-1 d-flex align-items-center gap-1">
                                    10% <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon>
                                </span>
                                <span class="text-xs fw-medium">+ $1500 Per Day</span>
                            </div>
                            <div id="chart" class="pt-28 apexcharts-tooltip-style-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card h-100 radius-8 border">
                        <div class="card-body p-24">
                            <h6 class="mb-12 fw-semibold text-lg mb-16">Total Subscriber</h6>
                            <div class="d-flex align-items-center gap-2 mb-20">
                                <h6 class="fw-semibold mb-0">5,000</h6>
                                <p class="text-sm mb-0">
                                    <span
                                        class="bg-danger-focus border br-danger px-8 py-2 rounded-pill fw-semibold text-danger-main text-sm d-inline-flex align-items-center gap-1">
                                        10%
                                        <iconify-icon icon="iconamoon:arrow-down-2-fill"
                                            class="icon"></iconify-icon>
                                    </span>
                                    - 20 Per Day
                                </p>
                            </div>

                            <div id="barChart"></div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card h-100 radius-8 border-0 overflow-hidden">
                        <div class="card-body p-24">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <h6 class="mb-2 fw-bold text-lg">Users Overview</h6>
                                <div class="">
                                    <select
                                        class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                        <option>Today</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                    </select>
                                </div>
                            </div>


                            <div id="userOverviewDonutChart"></div>

                            <ul class="d-flex flex-wrap align-items-center justify-content-between mt-3 gap-3">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                                    <span class="text-secondary-light text-sm fw-normal">New:
                                        <span class="text-primary-light fw-semibold">500</span>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                                    <span class="text-secondary-light text-sm fw-normal">Subscribed:
                                        <span class="text-primary-light fw-semibold">300</span>
                                    </span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-12">
                    <div class="card h-100">
                        <div class="card-body p-24">

                            <div class="d-flex flex-wrap align-items-center gap-1 justify-content-between mb-16">
                                <ul class="nav border-gradient-tab nav-pills mb-0" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link d-flex align-items-center active"
                                            id="pills-to-do-list-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-to-do-list" type="button" role="tab"
                                            aria-controls="pills-to-do-list" aria-selected="true">
                                            Latest Registered
                                            <span
                                                class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">35</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link d-flex align-items-center" id="pills-recent-leads-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-recent-leads" type="button"
                                            role="tab" aria-controls="pills-recent-leads" aria-selected="false"
                                            tabindex="-1">
                                            Latest Subscribe
                                            <span
                                                class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">35</span>
                                        </button>
                                    </li>
                                </ul>
                                <a href="javascript:void(0)"
                                    class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                    View All
                                    <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                </a>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-to-do-list" role="tabpanel"
                                    aria-labelledby="pills-to-do-list-tab" tabindex="0">
                                    <div class="table-responsive scroll-sm">
                                        <table class="table bordered-table sm-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Users </th>
                                                    <th scope="col">Registered On</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col" class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}/images/users/user1.png"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">redaniel@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Free</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets1/images/users/user2.png') }}"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">xterris@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Basic</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets1/images/users/user3.png') }}"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">seannand@mail.ru</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Standard</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets1/images/users/user4.png') }}"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Bessie Cooper </h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">igerrin@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Business</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets1/images/users/user5.png') }}"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">fellora@mail.ru</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Enterprise </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-recent-leads" role="tabpanel"
                                    aria-labelledby="pills-recent-leads-tab" tabindex="0">
                                    <div class="table-responsive scroll-sm">
                                        <table class="table bordered-table sm-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Users </th>
                                                    <th scope="col">Registered On</th>
                                                    <th scope="col">Plan</th>
                                                    <th scope="col" class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}/images/users/user1.png"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">redaniel@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Free</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('assets1/images/users/user2.png') }}"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">xterris@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Basic</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}/images/users/user3.png"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">seannand@mail.ru</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Standard</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}/images/users/user4.png"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Bessie Cooper </h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">igerrin@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Business</td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}/images/users/user5.png"
                                                                alt=""
                                                                class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                                                <span
                                                                    class="text-sm text-secondary-light fw-medium">fellora@mail.ru</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>27 Mar 2024</td>
                                                    <td>Enterprise </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <h6 class="mb-2 fw-bold text-lg mb-0">Top Performer</h6>
                                <a href="javascript:void(0)"
                                    class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                    View All
                                    <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                </a>
                            </div>

                            <div class="mt-32">

                                <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('') }}/images/users/user1.png" alt=""
                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <div class="flex-grow-1">
                                            <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                            <span class="text-sm text-secondary-light fw-medium">Agent ID:
                                                36254</span>
                                        </div>
                                    </div>
                                    <span class="text-primary-light text-md fw-medium">$20</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('') }}/images/users/user2.png" alt=""
                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <div class="flex-grow-1">
                                            <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                            <span class="text-sm text-secondary-light fw-medium">Agent ID:
                                                36254</span>
                                        </div>
                                    </div>
                                    <span class="text-primary-light text-md fw-medium">$20</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('') }}/images/users/user3.png" alt=""
                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <div class="flex-grow-1">
                                            <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                            <span class="text-sm text-secondary-light fw-medium">Agent ID:
                                                36254</span>
                                        </div>
                                    </div>
                                    <span class="text-primary-light text-md fw-medium">$30</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('') }}/images/users/user4.png" alt=""
                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <div class="flex-grow-1">
                                            <h6 class="text-md mb-0 fw-medium">Bessie Cooper</h6>
                                            <span class="text-sm text-secondary-light fw-medium">Agent ID:
                                                36254</span>
                                        </div>
                                    </div>
                                    <span class="text-primary-light text-md fw-medium">$40</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('') }}/images/users/user5.png" alt=""
                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <div class="flex-grow-1">
                                            <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                            <span class="text-sm text-secondary-light fw-medium">Agent ID:
                                                36254</span>
                                        </div>
                                    </div>
                                    <span class="text-primary-light text-md fw-medium">$10</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('') }}/images/users/user1.png" alt=""
                                            class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                                        <div class="flex-grow-1">
                                            <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                            <span class="text-sm text-secondary-light fw-medium">Agent ID:
                                                36254</span>
                                        </div>
                                    </div>
                                    <span class="text-primary-light text-md fw-medium">$10</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                                <h6 class="mb-2 fw-bold text-lg mb-0">Top Countries</h6>
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>Today</option>
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                </select>
                            </div>

                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <div id="world-map" class="h-100 border radius-8"></div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="h-100 border p-16 pe-0 radius-8">
                                        <div class="max-h-266-px overflow-y-auto scroll-sm pe-16">
                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                                <div class="d-flex align-items-center w-100">
                                                    <img src="{{ asset('') }}/images/flags/flag1.png"
                                                        alt=""
                                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                    <div class="flex-grow-1">
                                                        <h6 class="text-sm mb-0">USA</h6>
                                                        <span class="text-xs text-secondary-light fw-medium">1,240
                                                            Users</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 w-100">
                                                    <div class="w-100 max-w-66 ms-auto">
                                                        <div class="progress progress-sm rounded-pill"
                                                            role="progressbar" aria-label="Success example"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary-600 rounded-pill"
                                                                style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-secondary-light font-xs fw-semibold">80%</span>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                                <div class="d-flex align-items-center w-100">
                                                    <img src="{{ asset('') }}/images/flags/flag2.png"
                                                        alt=""
                                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                    <div class="flex-grow-1">
                                                        <h6 class="text-sm mb-0">Japan</h6>
                                                        <span class="text-xs text-secondary-light fw-medium">1,240
                                                            Users</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 w-100">
                                                    <div class="w-100 max-w-66 ms-auto">
                                                        <div class="progress progress-sm rounded-pill"
                                                            role="progressbar" aria-label="Success example"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-orange rounded-pill"
                                                                style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-secondary-light font-xs fw-semibold">60%</span>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                                <div class="d-flex align-items-center w-100">
                                                    <img src="{{ asset('') }}/images/flags/flag3.png"
                                                        alt=""
                                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                    <div class="flex-grow-1">
                                                        <h6 class="text-sm mb-0">France</h6>
                                                        <span class="text-xs text-secondary-light fw-medium">1,240
                                                            Users</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 w-100">
                                                    <div class="w-100 max-w-66 ms-auto">
                                                        <div class="progress progress-sm rounded-pill"
                                                            role="progressbar" aria-label="Success example"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-yellow rounded-pill"
                                                                style="width: 49%;"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-secondary-light font-xs fw-semibold">49%</span>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                                <div class="d-flex align-items-center w-100">
                                                    <img src="{{ asset('') }}/images/flags/flag4.png"
                                                        alt=""
                                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                    <div class="flex-grow-1">
                                                        <h6 class="text-sm mb-0">Germany</h6>
                                                        <span class="text-xs text-secondary-light fw-medium">1,240
                                                            Users</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 w-100">
                                                    <div class="w-100 max-w-66 ms-auto">
                                                        <div class="progress progress-sm rounded-pill"
                                                            role="progressbar" aria-label="Success example"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-success-main rounded-pill"
                                                                style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-secondary-light font-xs fw-semibold">100%</span>
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                                                <div class="d-flex align-items-center w-100">
                                                    <img src="{{ asset('') }}/images/flags/flag5.png"
                                                        alt=""
                                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                    <div class="flex-grow-1">
                                                        <h6 class="text-sm mb-0">South Korea</h6>
                                                        <span class="text-xs text-secondary-light fw-medium">1,240
                                                            Users</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 w-100">
                                                    <div class="w-100 max-w-66 ms-auto">
                                                        <div class="progress progress-sm rounded-pill"
                                                            role="progressbar" aria-label="Success example"
                                                            aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <div class="progress-bar bg-info-main rounded-pill"
                                                                style="width: 30%;"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-secondary-light font-xs fw-semibold">30%</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between gap-3">
                                                <div class="d-flex align-items-center w-100">
                                                    <img src="{{ asset('') }}/images/flags/flag1.png"
                                                        alt=""
                                                        class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                                                    <div class="flex-grow-1">
                                                        <h6 class="text-sm mb-0">USA</h6>
                                                        <span class="text-xs text-secondary-light fw-medium">1,240
                                                            Users</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 w-100">
                                                    <div class="w-100 max-w-66 ms-auto">
                                                        <div class="progress progress-sm rounded-pill"
                                                            role="progressbar" aria-label="Success example"
                                                            aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">
                                                            <div class="progress-bar bg-primary-600 rounded-pill"
                                                                style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-secondary-light font-xs fw-semibold">80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <h6 class="mb-2 fw-bold text-lg mb-0">Generated Content</h6>
                                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                                    <option>Today</option>
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                    <option>Yearly</option>
                                </select>
                            </div>

                            <ul class="d-flex flex-wrap align-items-center mt-3 gap-3">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px rounded-circle bg-primary-600"></span>
                                    <span class="text-secondary-light text-sm fw-semibold">Word:
                                        <span class="text-primary-light fw-bold">500</span>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px rounded-circle bg-yellow"></span>
                                    <span class="text-secondary-light text-sm fw-semibold">Image:
                                        <span class="text-primary-light fw-bold">300</span>
                                    </span>
                                </li>
                            </ul>

                            <div class="mt-40">
                                <div id="paymentStatusChart" class="margin-16-minus"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="d-footer">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
                </div>
                <div class="col-auto">
                    <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
                </div>
            </div>
        </footer>
    </main>

    {{-- jQuery library js  --}}
    <script src="{{ asset('assets1/js/lib/jquery-3.7.1.min.js') }}"></script>
    {{-- Bootstrap js  --}}
    <script src="{{ asset('assets1/js/lib/bootstrap.bundle.min.js') }}"></script>
    {{-- Apex Chart js  --}}
    <script src="{{ asset('assets1/js/lib/apexcharts.min.js') }}"></script>
    {{-- Data Table js  --}}
    <script src="{{ asset('assets1/js/lib/dataTables.min.js') }}"></script>
    {{-- Iconify Font js  --}}
    <script src="{{ asset('assets1/js/lib/iconify-icon.min.js') }}"></script>
    {{-- jQuery UI js  --}}
    <script src="{{ asset('assets1/js/lib/jquery-ui.min.js') }}"></script>
    {{-- Vector Map js  --}}
    <script src="{{ asset('assets1/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets1/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
    {{-- Popup js  --}}
    <script src="{{ asset('assets1/js/lib/magnifc-popup.min.js') }}"></script>
    {{-- Slick Slider js  --}}
    <script src="{{ asset('assets1/js/lib/slick.min.js') }}"></script>
    {{-- prism js  --}}
    <script src="{{ asset('assets1/js/lib/prism.js') }}"></script>
    {{-- file upload js  --}}
    <script src="{{ asset('assets1/js/lib/file-upload.js') }}"></script>
    {{-- audioplayer  --}}
    <script src="{{ asset('assets1/js/lib/audioplayer.js') }}"></script>

    {{-- main js  --}}
    <script src="{{ asset('assets1/js/app.js') }}"></script>

    <script src="{{ asset('assets1/js/homeOneChart.js') }}"></script>

</body>

</html>