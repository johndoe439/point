<!DOCTYPE html>
<html lang="en" class="group" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Pointwealthtrades | Best Platform" />
    <title>Pointwealthtrades | Best Platform</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="dash/images/favicon.ico" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('/dash/css/output.css') }}" />

</head>

<body
    class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-3">
    {{-- <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="/dash/pre-loader/bar-loader.gif" alt="loader" />
    </div> --}}
    <!-- Start Header -->
    <header
        class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square z-10 ac-transition">
        <div class="flex-center-between grow">
            <!-- Header Left -->
            <div class="flex items-center gap-4">
                <div class="menu-hamburger-container flex-center">
                    <button type="button" id="app-menu-hamburger" class="menu-hamburger hidden xl:block"></button>
                    <button type="button" class="menu-hamburger block xl:hidden" data-drawer-target="app-menu-drawer"
                        data-drawer-show="app-menu-drawer" aria-controls="app-menu-drawer"></button>
                </div>

            </div>
            <!-- Header Right -->
            <div class="flex items-center gap-1 sm:gap-3">
                <!-- Dark Light Button -->
                <button type="button"
                    class="themeMode size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md"
                    onclick="toggleThemeMode()">
                    <i
                        class="ri-contrast-2-line text-[22px] dark:text-dark-text-two dark:before:!content-['\f1bf']"></i>
                </button>


                <!-- Language Select Button -->

                <!-- Border -->
                <div
                    class="w-[1px] h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-[#EEE] dark:bg-dark-border hidden sm:block">
                </div>
                <!-- User Profile Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click"
                        data-popover-placement="bottom-end"
                        class="text-gray-500 dark:text-dark-text flex items-center gap-2 sm:pr-4 relative after:absolute after:right-0 after:font-remix after:content-['\ea4e'] after:text-[18px] after:hidden sm:after:block">
                        <img src="/dash/images/app/avatar-20.png" alt="user-img"
                            class="size-7 sm:size-9 rounded-50 dk-theme-card-square" />


                        <span
                            class="font-semibold leading-none text-lg capitalize hidden sm:block">{{ Auth::user()->name }}</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownProfile"
                        class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four">
                        <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                            <div class="font-medium">{{ Auth::user()->name }}</div>
                            <div class="truncate">
                                <a href="" class="__cf_email__">{{ Auth::user()->email }}</a>
                            </div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="index-2.html"
                                    class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="account-setting.html"
                                    class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                        <div class="py-2">


                            <form method="POST"
                                action="{{ route('logout') }}"class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">
                                @csrf

                                <button class="group-data-[sidebar-size=sm]:hidden block"> Signout </button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    @if (Auth::user()->role == 'user')
        <x-user></x-user>
    @elseif(Auth::user()->role == 'admin')
        <x-admin></x-admin>
    @endif
    {{ $slot }}

    <script data-cfasync="false" src="/dash/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('dash/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('dash/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dash/js/vendor/flowbite.min.js') }}"></script>
    <script src="{{ asset('dash/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dash/js/pages/dashboard-lms.js') }}"></script>
    <script src="{{ asset('dash/js/component/app-menu-bar.js') }}"></script>
    <script src="{{ asset('dash/js/component/tab.js') }}"></script>
    <script src="{{ asset('dash/js/switcher.js') }}"></script>
    <script src="{{ asset('dash/js/layout.js') }}"></script>
    <script src="{{ asset('dash/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


</body>


</html>
