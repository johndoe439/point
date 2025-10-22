<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pointwealthtrades | Best Platform</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="Pointwealthtrades | Best Platform" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Style CSS -->
    <link rel="stylesheet" href="dash/css/output.css">
</head>

<body class="bg-body-light dark:bg-dark-body">
    <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="/dash/pre-loader/bar-loader.gif" alt="loader">
    </div>

    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div
            class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)]">
            <!-- Start Overview Area -->
            <div class="col-span-full lg:col-span-6">
                <div class="flex flex-col items-center justify-center gap-10 text-center">
                    <div class="hidden sm:block">
                        <img src="/dash/images/loti/loti-auth.svg" alt="loti" class="group-[.dark]:hidden">
                        <img src="/dash/images/loti/loti-auth-dark.svg" alt="loti" class="group-[.light]:hidden">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Welcome back!
                        </h3>

                    </div>
                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div
                    class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign In
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome Back! Log in to your account
                    </p>
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-2.5">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" placeholder="debra.holt@example.com" type="email" name="email"
                                required autofocus autocomplete="username" class="form-input px-4 py-3.5 rounded-lg">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <div class="mt-5">
                            <label for="password" class="form-label">Password</label>
                            <div class="relative">
                                <input type="password" id="password" placeholder="Password" name="password" required
                                    class="form-input px-4 py-3.5 rounded-lg pr-10">
                                <button type="button" id="togglePassword"
                                    class="absolute inset-y-0 right-0 top-2 flex items-center pr-3 text-gray-500 hover:text-gray-700 focus:outline-none">
                                    <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        <div class="flex items-center justify-between mt-3 mb-7">
                            <div class="flex items-center gap-1 select-none">
                                <input name="remember" type="checkbox" id="rememberMe">
                                <label for="rememberMe"
                                    class="font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">Remember
                                    Me</label>
                            </div>
                            <a href="{{ route('password.request') }}"
                                class="text-xs leading-none text-primary-500 font-semibold">Forgot password?</a>
                        </div>
                        <!-- Submit Button -->
                        <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square">Sign
                            In</button>
                    </form>

                    <script>
                        document.getElementById('togglePassword').addEventListener('click', function() {
                            const passwordInput = document.getElementById('password');
                            const eyeIcon = document.getElementById('eyeIcon');
                            const isPassword = passwordInput.type === 'password';

                            passwordInput.type = isPassword ? 'text' : 'password';
                            eyeIcon.innerHTML = isPassword ?
                                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>` :
                                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>`;
                        });
                    </script>
                    <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">OR
                    </div>

                    <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                        Don’t have an account yet?
                        <a href="{{ route('register') }}" class="text-primary-500 font-semibold">Sign Up</a>
                    </div>
                </div>
            </div>
            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->

    <script src="/dash/js/vendor/jquery.min.js"></script>
    <script src="/dash/js/switcher.js"></script>
    <script src="/dash/js/layout.js"></script>
    <script src="/dash/js/main.js"></script>
</body>


</html>
