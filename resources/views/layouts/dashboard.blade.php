<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Factory Management') }} - Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- Chart.js -->
    <link href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css" rel="stylesheet">
    { <!-- remix icon font css  -->
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
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">}

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            {{-- <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="position-sticky">
                    <div class="sidebar-brand text-center py-3">

                        <div class="logo">
                            <a href="{{ route('dashboard') }}" class="simple-text logo-mini">
                                <img src="{{ asset('build/assets/logo.png') }}" alt="Company Logo">
                            </a>
                            <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
                                Gestion d'Usines
                            </a>
                        </div>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('inventory*') ? 'active' : '' }}"
                                href="{{ route('inventory.index') }}">
                                <i class="fas fa-boxes"></i> Inventory
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('production*') ? 'active' : '' }}"
                                href="{{ route('production.index') }}">
                                <i class="fas fa-industry"></i> Production
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('orders*') ? 'active' : '' }}"
                                href="{{ route('orders.index') }}">
                                <i class="fas fa-shopping-cart"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('employees*') ? 'active' : '' }}"
                                href="{{ route('employees.index') }}">
                                <i class="fas fa-users"></i> Employees
                            </a>
                        </li>
                        @if (auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin*') ? 'active' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fas fa-cogs"></i> Admin Panel
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav> --}}
            <aside class="sidebar">
                <button type="button" class="sidebar-close-btn">
                    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
                </button>
                <div>
                    <a href="" class="sidebar-logo">
                        <img src="{{ asset('favicon.ico') }}" alt="site logo" class="light-logo">
                        <img src="{{ asset('build/assets/logo.png') }}" alt="site logo" class="dark-logo">
                        FactoryFlow
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
                                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                        href="{{ route('dashboard') }}"><i
                                            class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>
                                        Dash</a>
                                </li>
                                <li>
                                    <a class="nav-link {{ request()->routeIs('inventory*') ? 'active' : '' }}"
                                        href="{{ route('inventory.index') }}"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                        Products</a>
                                </li>
                                <li>
                                    <a class="nav-link {{ request()->routeIs('production*') ? 'active' : '' }}"
                                        href="{{ route('production.index') }}"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Production Line</a>
                                </li>
                                <li>
                                    <a href="{{ route('orders.index') }}"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                        Orders</a>
                                </li>
                                <li>
                                    <a class="nav-link {{ request()->routeIs('employees*') ? 'active' : '' }}"
                                        href="{{ route('employees.index') }}"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                        Employees</a>
                                </li>

                            </ul>
                        </li>
                        {{-- <li class="sidebar-menu-group-title">Application</li>
                        <li>
                            <a href="#">
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
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Preview</a>
                                </li>
                                <li>
                                    <a href="invoice-add.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                        Add new</a>
                                </li>
                                <li>
                                    <a href="invoice-edit.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Edit</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a href="javascript:void(0)">
                                <i class="ri-robot-2-line"></i>
                                <span>Ai Application</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="text-generator.html"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Text
                                        Generator</a>
                                </li>
                                <li>
                                    <a href="code-generator.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Code
                                        Generator</a>
                                </li>
                                <li>
                                    <a href="image-generator.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i> Image
                                        Generator</a>
                                </li>
                                <li>
                                    <a href="voice-generator.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Voice
                                        Generator</a>
                                </li>
                                <li>
                                    <a href="video-generator.html"><i
                                            class="ri-circle-fill circle-icon text-success-main w-auto"></i> Video
                                        Generator</a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li class="dropdown">
                            <a href="javascript:void(0)">
                                <i class="ri-robot-2-line"></i>
                                <span>Crypto Currency</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="wallet.html"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                        Wallet</a>
                                </li>
                                <li>
                                    <a href="marketplace.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Marketplace</a>
                                </li>
                                <li>
                                    <a href="marketplace-details.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Marketplace
                                        Details</a>
                                </li>
                                <li>
                                    <a href="portfolio.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Portfolios</a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- <li class="sidebar-menu-group-title">UI Elements</li>

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
                                    <a href="colors.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Colors</a>
                                </li>
                                <li>
                                    <a href="button.html"><i
                                            class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                        Button</a>
                                </li>
                                <li>
                                    <a href="dropdown.html"><i
                                            class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i>
                                        Dropdown</a>
                                </li>
                                <li>
                                    <a href="alert.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Alerts</a>
                                </li>
                                <li>
                                    <a href="card.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                        Card</a>
                                </li>
                                <li>
                                    <a href="carousel.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                        Carousel</a>
                                </li>
                                <li>
                                    <a href="avatar.html"><i
                                            class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                        Avatars</a>
                                </li>
                                <li>
                                    <a href="progress.html"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                        Progress bar</a>
                                </li>
                                <li>
                                    <a href="tabs.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Tab & Accordion</a>
                                </li>
                                <li>
                                    <a href="pagination.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                        Pagination</a>
                                </li>
                                <li>
                                    <a href="badges.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                        Badges</a>
                                </li>
                                <li>
                                    <a href="tooltip.html"><i
                                            class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i>
                                        Tooltip & Popover</a>
                                </li>
                                <li>
                                    <a href="videos.html"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i>
                                        Videos</a>
                                </li>
                                <li>
                                    <a href="star-rating.html"><i
                                            class="ri-circle-fill circle-icon text-indigo w-auto"></i>
                                        Star Ratings</a>
                                </li>
                                <li>
                                    <a href="tags.html"><i class="ri-circle-fill circle-icon text-purple w-auto"></i>
                                        Tags</a>
                                </li>
                                <li>
                                    <a href="list.html"><i class="ri-circle-fill circle-icon text-red w-auto"></i>
                                        List</a>
                                </li>
                                <li>
                                    <a href="calendar.html"><i
                                            class="ri-circle-fill circle-icon text-yellow w-auto"></i>
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
                                    <a href="form.html"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                        Input Forms</a>
                                </li>
                                <li>
                                    <a href="form-layout.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input
                                        Layout</a>
                                </li>
                                <li>
                                    <a href="form-validation.html"><i
                                            class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form
                                        Validation</a>
                                </li>
                                <li>
                                    <a href="wizard.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
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
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic
                                        Table</a>
                                </li>
                                <li>
                                    <a href="table-data.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data
                                        Table</a>
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
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line
                                        Chart</a>
                                </li>
                                <li>
                                    <a href="column-chart.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column
                                        Chart</a>
                                </li>
                                <li>
                                    <a href="pie-chart.html"><i
                                            class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie
                                        Chart</a>
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
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users
                                        List</a>
                                </li>
                                <li>
                                    <a href="users-grid.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users
                                        Grid</a>
                                </li>
                                <li>
                                    <a href="add-user.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i>
                                        Add User</a>
                                </li>
                                <li>
                                    <a href="view-profile.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View
                                        Profile</a>
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
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Role &
                                        Access</a>
                                </li>
                                <li>
                                    <a href="assign-role.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Assign
                                        Role</a>
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
                                    <a href="sign-in.html"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                        Sign In</a>
                                </li>
                                <li>
                                    <a href="sign-up.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Sign Up</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot
                                        Password</a>
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
                                <iconify-icon icon="mage:message-question-mark-round"
                                    class="menu-icon"></iconify-icon>
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
                        </li> --}}
                        <li class="dropdown">
                            <a href="javascript:void(0)">
                                <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                                <span>Settings</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{ route('profile.edit') }}"><i
                                            class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>
                                        Profile</a></li>

                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                            <img src="{{ asset('homepage/img/logout.png') }}" alt="Logout"
                                                class="logout-icon" width="16px" height="16px">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                                {{-- <li>
                                    <a href="company.html"><i
                                            class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                        Company</a>
                                </li>
                                <li>
                                    <a href="notification.html"><i
                                            class="ri-circle-fill circle-icon text-warning-main w-auto"></i>
                                        Notification</a>
                                </li>
                                <li>
                                    <a href="notification-alert.html"><i
                                            class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification
                                        Alert</a>
                                </li>
                                <li>
                                    <a href="theme.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                        Theme</a>
                                </li>
                                <li>
                                    <a href="currencies.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                        Currencies</a>
                                </li>
                                <li>
                                    <a href="language.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i>
                                        Languages</a>
                                </li>
                                <li>
                                    <a href="payment-gateway.html"><i
                                            class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment
                                        Gateway</a>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Top Navbar -->
                {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown">
                                        <i class="fas fa-user"></i> {{ auth()->user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> --}}
                <div class="navbar-header">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="d-flex flex-wrap align-items-center gap-4">
                                <button type="button" class="sidebar-toggle">
                                    <iconify-icon icon="heroicons:bars-3-solid"
                                        class="icon text-2xl non-active"></iconify-icon>
                                    <iconify-icon icon="iconoir:arrow-right"
                                        class="icon text-2xl active"></iconify-icon>
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
                                                <h6 class="text-lg text-primary-light fw-semibold mb-0">Choose Your
                                                    Language
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="max-h-400-px overflow-y-auto scroll-sm pe-8">
                                            <div
                                                class="form-check style-check d-flex align-items-center justify-content-between mb-16">
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                                <label
                                                    class="form-check-label line-height-1 fw-medium text-secondary-light"
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
                                </div><!-- Language dropdown end -->

                                <div class="dropdown">
                                    <button
                                        class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                        type="button" data-bs-toggle="dropdown">
                                        <iconify-icon icon="mage:email"
                                            class="text-primary-light text-xl"></iconify-icon>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey!
                                                            there
                                                            i'm...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-sm text-secondary-light flex-shrink-0">12:30
                                                        PM</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey!
                                                            there
                                                            i'm...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-sm text-secondary-light flex-shrink-0">12:30
                                                        PM</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey!
                                                            there
                                                            i’m...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-sm text-secondary-light flex-shrink-0">12:30
                                                        PM</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey!
                                                            there
                                                            i'm...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-sm text-secondary-light flex-shrink-0">12:30
                                                        PM</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-100-px">hey!
                                                            there
                                                            i’m...</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-sm text-secondary-light flex-shrink-0">12:30
                                                        PM</span>
                                                    <span
                                                        class="mt-4 text-xs text-base w-16-px h-16-px d-flex justify-content-center align-items-center bg-warning-main rounded-circle">8</span>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="text-center py-12 px-16">
                                            <a href="javascript:void(0)"
                                                class="text-primary-600 fw-semibold text-md">See All
                                                Message</a>
                                        </div>
                                    </div>
                                </div><!-- Message dropdown end -->

                                <div class="dropdown">
                                    <button
                                        class="has-indicator w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                                        type="button" data-bs-toggle="dropdown">
                                        <iconify-icon icon="iconoir:bell"
                                            class="text-primary-light text-xl"></iconify-icon>
                                    </button>
                                    <div class="dropdown-menu to-top dropdown-menu-lg p-0">
                                        <div
                                            class="m-16 py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                            <div>
                                                <h6 class="text-lg text-primary-light fw-semibold mb-0">Notifications
                                                </h6>
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
                                                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins
                                                    ago</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-200-px">You
                                                            can
                                                            stitch between artboards</p>
                                                    </div>
                                                </div>
                                                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins
                                                    ago</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-200-px">
                                                            Invite you
                                                            to prototyping</p>
                                                    </div>
                                                </div>
                                                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins
                                                    ago</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-200-px">
                                                            Invite you
                                                            to prototyping</p>
                                                    </div>
                                                </div>
                                                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins
                                                    ago</span>
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
                                                        <p class="mb-0 text-sm text-secondary-light text-w-200-px">
                                                            Invite you
                                                            to prototyping</p>
                                                    </div>
                                                </div>
                                                <span class="text-sm text-secondary-light flex-shrink-0">23 Mins
                                                    ago</span>
                                            </a>
                                        </div>

                                        <div class="text-center py-12 px-16">
                                            <a href="javascript:void(0)"
                                                class="text-primary-600 fw-semibold text-md">See All
                                                Notification</a>
                                        </div>

                                    </div>
                                </div><!-- Notification dropdown end -->
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
                                                <iconify-icon icon="radix-icons:cross-1"
                                                    class="icon text-xl"></iconify-icon>
                                            </button>
                                        </div>
                                        <ul class="to-top-list">
                                            <li>
                                                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                                    href="{{ route('profile.edit') }}">
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
                                                            icon="lucide:power" class="icon text-xl"></iconify-icon>
                                                        Log
                                                        Out</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- Profile dropdown end -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page Content -->
                <div class="container-fluid mt-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- In your layouts/dashboard.blade.php -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}
    <!-- Bootstrap JS and Dependencies -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    <!-- Chart.js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script> --}}

    <!-- Custom JS -->
    {{-- <script src="{{ asset('js/dashboard.js') }}"></script> --}}

    <!-- Initialize Chart Data -->
    <script>
        window.chartData = @json($chartData ?? []);
        window.stockStatus = @json($stockStatus ?? []);
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- jQuery library js -->
    <script src="{{ asset('assets1/js/lib/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets1/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Apex Chart js -->
    <script src="{{ asset('assets1/js/lib/apexcharts.min.js') }}"></script>
    <!-- Data Table js -->
    <script src="{{ asset('assets1/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets1/js/lib/iconify-icon.min.js') }}"></script>
    <!-- jQuery UI js -->
    <script src="{{ asset('assets1/js/lib/jquery-ui.min.js') }}"></script>
    <!-- Vector Map js -->
    <script src="{{ asset('assets1/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets1/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Popup js -->
    <script src="{{ asset('assets1/js/lib/magnifc-popup.min.js') }}"></script>
    <!-- Slick Slider js -->
    <script src="{{ asset('assets1/js/lib/slick.min.js') }}"></script>
    <!-- prism js -->
    <script src="{{ asset('assets1/js/lib/prism.js') }}"></script>
    <!-- file upload js -->
    <script src="{{ asset('assets1/js/lib/file-upload.js') }}"></script>
    <!-- audioplayer -->
    <script src="{{ asset('assets1/js/lib/audioplayer.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets1/js/app.js') }}"></script>

    <script src="{{ asset('assets1/js/homeOneChart.js') }}"></script>

    @yield('scripts')
</body>

</html>
