{{-- <x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3 ">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{-- <link rel="stylesheet" href="{{ asset('assets1/css/remixicon.css') }}">
<!-- BootStrap css -->
<link rel="stylesheet" href="{{ asset('assets1/css/lib/bootstrap.min.css') }}">
<!-- Apex Chart css -->
<link rel="stylesheet" href="{{ asset('assets1/css/lib/apexcharts.css') }}">
<!-- Data Table css -->
<link rel="stylesheet" href="{{ asset('assets1/css/lib/dataTables.min.css') }}">
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


<section class="auth bg-base d-flex flex-wrap">
    <div class="auth-left d-lg-block d-none bg-primary">
        <div class="d-flex align-items-center flex-column h-100 justify-content-center">
            <img src="{{ asset('assets1\images\auth\login.png') }}" alt="">
        </div>
    </div>
    <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
        <div class="max-w-464-px mx-auto w-100">
            <div>

                <h4 class="mb-12">Sign In to your Account</h4>
                <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="icon-field mb-16">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                    <input type="email" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Email">
                </div>
                <div class="position-relative mb-20">
                    <div class="icon-field">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                        </span>
                        <input type="password" class="form-control h-56-px bg-neutral-50 radius-12" id="your-password"
                            placeholder="Password">
                    </div>
                    <span
                        class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                        data-toggle="#your-password"></span>
                </div>
                <div class="">
                    <div class="d-flex justify-content-between gap-2">
                        <div class="form-check style-check d-flex align-items-center">
                            <input class="form-check-input border border-neutral-300" type="checkbox" value=""
                                id="remeber">
                            <label class="form-check-label" for="remeber">Remember me </label>
                        </div>
                        <a href="javascript:void(0)" class="text-primary-600 fw-medium">Forgot Password?</a>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                    Sign
                    In</button>
                <x-primary-button type="submit"
                    class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                    {{ __('Log in') }}
                </x-primary-button>
                <div class="mt-32 center-border-horizontal text-center">
                    <span class="bg-base z-1 px-4">Or sign in with</span>
                </div>
                <div class="mt-32 d-flex align-items-center gap-3">
                    <button type="button"
                        class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                        <iconify-icon icon="ic:baseline-facebook"
                            class="text-primary-600 text-xl line-height-1"></iconify-icon>
                        Google
                    </button>
                    <button type="button"
                        class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                        <iconify-icon icon="logos:google-icon"
                            class="text-primary-600 text-xl line-height-1"></iconify-icon>
                        Google
                    </button>
                </div>
                <div class="mt-32 text-center text-sm">
                    <p class="mb-0">Don't have an account? <a href="sign-up.html"
                            class="text-primary-600 fw-semibold">Sign Up</a></p>
                </div>

            </form>

        </div>
    </div>
</section>
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
<script src="{{ asset('assets1/js/app.js') }}"></script> --}}


{{-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --}}

<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('assets1/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/lib/dataTables.min.css') }}">
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

    <section class="auth bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none bg-primary">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                <img src="{{ asset('assets1/images/auth/login.png') }}" alt="">
            </div>
        </div>
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <h4 class="mb-12">Sign In to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your details</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" class="form-control h-56-px bg-neutral-50 radius-12" name="email"
                            placeholder="Email" value="{{ old('email') }}" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="position-relative mb-20">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input type="password" class="form-control h-56-px bg-neutral-50 radius-12"
                                id="your-password" name="password" placeholder="Password" required>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <span
                            class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light"
                            data-toggle="#your-password"></span>
                    </div>
                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input border border-neutral-300" type="checkbox"
                                    name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class=" form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-primary-600 fw-medium">Forgot
                                Password?</a>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">
                        Sign In
                    </button>
                    <div class="mt-32 center-border-horizontal text-center">
                        <span class="bg-base z-1 px-4">Or sign in with</span>
                    </div>
                    <div class="mt-32 d-flex align-items-center gap-3">
                        <button type="button"
                            class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                            <iconify-icon icon="ic:baseline-facebook"
                                class="text-primary-600 text-xl line-height-1"></iconify-icon>
                            Facebook
                        </button>
                        <button type="button"
                            class="fw-semibold text-primary-light py-16 px-24 w-50 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                            <iconify-icon icon="logos:google-icon"
                                class="text-primary-600 text-xl line-height-1"></iconify-icon>
                            Google
                        </button>
                    </div>
                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                class="text-primary-600 fw-semibold">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
    <script src="{{ asset('assets1/js/lib/magnific-popup.min.js') }}"></script>
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
</x-guest-layout>