<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<!-- Mirrored from template.codexshaper.com/admin/dashkit/new-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 May 2025 15:25:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Pointwealthtrades | Best Platform" />
    <title>Pointwealthtrades | Best Platform</title>
    <meta name="robots" content="noindex, follow">
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
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                            Whether you're launching a stunning online store optimizing your our object-oriented
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div
                    class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Create a New Password
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome Back! Log in to your account
                    </p>
                    <form action="https://template.codexshaper.com/admin/student-profile.html"
                        class="leading-none mt-8">
                        <div class="mt-5">
                            <label for="oldPassword" class="form-label">Password</label>
                            <div class="relative">
                                <input type="password" id="oldPassword" placeholder="Old Password" required
                                    class="form-input px-4 py-3.5 rounded-lg">
                                <label for="toggleOldPass"
                                    class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center !left-auto -right-2.5">
                                    <input type="checkbox" id="toggleOldPass" class="inputTypeToggle peer/it" hidden>
                                    <i
                                        class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                                </label>
                            </div>
                        </div>
                        <div class="mt-5 mb-7">
                            <label for="newPassword" class="form-label">Confirm Password</label>
                            <div class="relative">
                                <input type="password" id="newPassword" placeholder="New Password" required
                                    class="form-input px-4 py-3.5 rounded-lg">
                                <label for="toggleNewPass"
                                    class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center !left-auto -right-2.5">
                                    <input type="checkbox" id="toggleNewPass" class="inputTypeToggle peer/it" hidden>
                                    <i
                                        class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                                </label>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn b-solid btn-primary-solid w-full dk-theme-card-square">Confirm
                            Password</button>
                    </form>
                    <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                        Back to /
                        <a href="sign-in.html" class="text-primary-500 font-semibold">Sign in</a>
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

<!-- Mirrored from template.codexshaper.com/admin/dashkit/new-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 May 2025 15:25:49 GMT -->

</html>
