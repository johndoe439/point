<div>
    <!-- Start App Menu -->
    <div id="app-menu-drawer"
        class="app-menu flex flex-col gap-y-2.5 bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max xl:translate-x-0 rounded-r-10 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:bottom-4 z-backdrop xl:group-data-[theme-width=box]:left-auto dk-theme-card-square ac-transition"
        tabindex="-1">
        <div
            class="px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:px-2 group-data-[sidebar-size=sm]:justify-center">
            <a href="{{ route('admin') }}" class="group-data-[sidebar-size=lg]:block hidden">
                <img src="/frontend/img/app-logo.png" height="50" width="80" alt="logo"
                    class="group-[.dark]:hidden" />
                <img src="/frontend/img/app-logo.png" height="50" width="80" alt="logo"
                    class="group-[.light]:hidden" />
            </a>
            <a href="index-2.html" class="group-data-[sidebar-size=lg]:hidden block">
                <img src="assets/images/logo/logo-icon.svg" alt="logo" />
            </a>
        </div>
        <div id="app-menu-scrollbar" data-scrollbar
            class="pl-4 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
            <div class="group-data-[sidebar-size=lg]:max-h-full">
                <ul id="navbar-nav"
                    class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">

                    <!-- Users -->
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route('admin') }}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M4.30692 10.1428V13.2197C4.30692 13.5461 4.17725 13.8592 3.94644 14.09C3.71562 14.3208 3.40257 14.4505 3.07615 14.4505H1.84539C1.51897 14.4505 1.20592 14.3208 0.975107 14.09C0.744293 13.8592 0.614624 13.5461 0.614624 13.2197V8.91205H3.07615C3.40257 8.91205 3.71562 9.04172 3.94644 9.27253C4.17725 9.50334 4.30692 9.81639 4.30692 10.1428ZM12.9223 8.91205C12.5959 8.91205 12.2828 9.04172 12.052 9.27253C11.8212 9.50334 11.6915 9.81639 11.6915 10.1428V13.2197C11.6915 13.5461 11.8212 13.8592 12.052 14.09C12.2828 14.3208 12.5959 14.4505 12.9223 14.4505H14.153C14.4795 14.4505 14.7925 14.3208 15.0233 14.09C15.2541 13.8592 15.3838 13.5461 15.3838 13.2197V8.91205H12.9223Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_23)] group-[.active]/menu-link:fill-[url(#g_23)] dark:fill-none" />
                                    <path
                                        d="M13.6831 3.27054C12.5654 2.14638 11.1393 1.37929 9.58525 1.06649C8.03123 0.75368 6.41934 0.909233 4.95382 1.51343C3.4883 2.11763 2.23512 3.14329 1.35309 4.46042C0.471066 5.77755 -0.000112336 7.32687 -0.000732422 8.91205V13.2197C-0.000732422 13.7094 0.193772 14.1789 0.539992 14.5252C0.886211 14.8714 1.35579 15.0659 1.84541 15.0659H3.07618C3.56581 15.0659 4.03538 14.8714 4.3816 14.5252C4.72782 14.1789 4.92233 13.7094 4.92233 13.2197V10.1428C4.92233 9.65319 4.72782 9.18362 4.3816 8.8374C4.03538 8.49118 3.56581 8.29667 3.07618 8.29667H1.25772C1.41125 6.61483 2.18791 5.05113 3.43523 3.91255C4.68254 2.77397 6.31041 2.14276 7.99924 2.14285H8.05078C9.73257 2.14995 11.3511 2.78492 12.5891 3.9233C13.8271 5.06167 14.5952 6.62137 14.7431 8.29667H12.9223C12.4327 8.29667 11.9631 8.49118 11.6169 8.8374C11.2707 9.18362 11.0761 9.65319 11.0761 10.1428V13.2197C11.0761 13.7094 11.2707 14.1789 11.6169 14.5252C11.9631 14.8714 12.4327 15.0659 12.9223 15.0659H14.1531C14.6427 15.0659 15.1123 14.8714 15.4585 14.5252C15.8047 14.1789 15.9992 13.7094 15.9992 13.2197V8.91205C16.0032 7.86558 15.8007 6.82859 15.4032 5.86052C15.0058 4.89244 14.4212 4.01231 13.6831 3.27054ZM3.07618 9.52744C3.23939 9.52744 3.39591 9.59227 3.51132 9.70768C3.62673 9.82308 3.69156 9.97961 3.69156 10.1428V13.2197C3.69156 13.3829 3.62673 13.5395 3.51132 13.6549C3.39591 13.7703 3.23939 13.8351 3.07618 13.8351H1.84541C1.68221 13.8351 1.52568 13.7703 1.41027 13.6549C1.29487 13.5395 1.23003 13.3829 1.23003 13.2197V9.52744H3.07618ZM14.7684 13.2197C14.7684 13.3829 14.7036 13.5395 14.5882 13.6549C14.4728 13.7703 14.3163 13.8351 14.1531 13.8351H12.9223C12.7591 13.8351 12.6026 13.7703 12.4872 13.6549C12.3717 13.5395 12.3069 13.3829 12.3069 13.2197V10.1428C12.3069 9.97961 12.3717 9.82308 12.4872 9.70768C12.6026 9.59227 12.7591 9.52744 12.9223 9.52744H14.7684V13.2197Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_23" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                users
                            </span>
                        </a>
                    </li>
                    <!-- Crypto Address -->
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route('crypto') }}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M4.30692 10.1428V13.2197C4.30692 13.5461 4.17725 13.8592 3.94644 14.09C3.71562 14.3208 3.40257 14.4505 3.07615 14.4505H1.84539C1.51897 14.4505 1.20592 14.3208 0.975107 14.09C0.744293 13.8592 0.614624 13.5461 0.614624 13.2197V8.91205H3.07615C3.40257 8.91205 3.71562 9.04172 3.94644 9.27253C4.17725 9.50334 4.30692 9.81639 4.30692 10.1428ZM12.9223 8.91205C12.5959 8.91205 12.2828 9.04172 12.052 9.27253C11.8212 9.50334 11.6915 9.81639 11.6915 10.1428V13.2197C11.6915 13.5461 11.8212 13.8592 12.052 14.09C12.2828 14.3208 12.5959 14.4505 12.9223 14.4505H14.153C14.4795 14.4505 14.7925 14.3208 15.0233 14.09C15.2541 13.8592 15.3838 13.5461 15.3838 13.2197V8.91205H12.9223Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_23)] group-[.active]/menu-link:fill-[url(#g_23)] dark:fill-none" />
                                    <path
                                        d="M13.6831 3.27054C12.5654 2.14638 11.1393 1.37929 9.58525 1.06649C8.03123 0.75368 6.41934 0.909233 4.95382 1.51343C3.4883 2.11763 2.23512 3.14329 1.35309 4.46042C0.471066 5.77755 -0.000112336 7.32687 -0.000732422 8.91205V13.2197C-0.000732422 13.7094 0.193772 14.1789 0.539992 14.5252C0.886211 14.8714 1.35579 15.0659 1.84541 15.0659H3.07618C3.56581 15.0659 4.03538 14.8714 4.3816 14.5252C4.72782 14.1789 4.92233 13.7094 4.92233 13.2197V10.1428C4.92233 9.65319 4.72782 9.18362 4.3816 8.8374C4.03538 8.49118 3.56581 8.29667 3.07618 8.29667H1.25772C1.41125 6.61483 2.18791 5.05113 3.43523 3.91255C4.68254 2.77397 6.31041 2.14276 7.99924 2.14285H8.05078C9.73257 2.14995 11.3511 2.78492 12.5891 3.9233C13.8271 5.06167 14.5952 6.62137 14.7431 8.29667H12.9223C12.4327 8.29667 11.9631 8.49118 11.6169 8.8374C11.2707 9.18362 11.0761 9.65319 11.0761 10.1428V13.2197C11.0761 13.7094 11.2707 14.1789 11.6169 14.5252C11.9631 14.8714 12.4327 15.0659 12.9223 15.0659H14.1531C14.6427 15.0659 15.1123 14.8714 15.4585 14.5252C15.8047 14.1789 15.9992 13.7094 15.9992 13.2197V8.91205C16.0032 7.86558 15.8007 6.82859 15.4032 5.86052C15.0058 4.89244 14.4212 4.01231 13.6831 3.27054ZM3.07618 9.52744C3.23939 9.52744 3.39591 9.59227 3.51132 9.70768C3.62673 9.82308 3.69156 9.97961 3.69156 10.1428V13.2197C3.69156 13.3829 3.62673 13.5395 3.51132 13.6549C3.39591 13.7703 3.23939 13.8351 3.07618 13.8351H1.84541C1.68221 13.8351 1.52568 13.7703 1.41027 13.6549C1.29487 13.5395 1.23003 13.3829 1.23003 13.2197V9.52744H3.07618ZM14.7684 13.2197C14.7684 13.3829 14.7036 13.5395 14.5882 13.6549C14.4728 13.7703 14.3163 13.8351 14.1531 13.8351H12.9223C12.7591 13.8351 12.6026 13.7703 12.4872 13.6549C12.3717 13.5395 12.3069 13.3829 12.3069 13.2197V10.1428C12.3069 9.97961 12.3717 9.82308 12.4872 9.70768C12.6026 9.59227 12.7591 9.52744 12.9223 9.52744H14.7684V13.2197Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_23" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Crypto Address
                            </span>
                        </a>
                    </li>
                    <!-- Deposit -->
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route('admin.deposit') }}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M4.30692 10.1428V13.2197C4.30692 13.5461 4.17725 13.8592 3.94644 14.09C3.71562 14.3208 3.40257 14.4505 3.07615 14.4505H1.84539C1.51897 14.4505 1.20592 14.3208 0.975107 14.09C0.744293 13.8592 0.614624 13.5461 0.614624 13.2197V8.91205H3.07615C3.40257 8.91205 3.71562 9.04172 3.94644 9.27253C4.17725 9.50334 4.30692 9.81639 4.30692 10.1428ZM12.9223 8.91205C12.5959 8.91205 12.2828 9.04172 12.052 9.27253C11.8212 9.50334 11.6915 9.81639 11.6915 10.1428V13.2197C11.6915 13.5461 11.8212 13.8592 12.052 14.09C12.2828 14.3208 12.5959 14.4505 12.9223 14.4505H14.153C14.4795 14.4505 14.7925 14.3208 15.0233 14.09C15.2541 13.8592 15.3838 13.5461 15.3838 13.2197V8.91205H12.9223Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_23)] group-[.active]/menu-link:fill-[url(#g_23)] dark:fill-none" />
                                    <path
                                        d="M13.6831 3.27054C12.5654 2.14638 11.1393 1.37929 9.58525 1.06649C8.03123 0.75368 6.41934 0.909233 4.95382 1.51343C3.4883 2.11763 2.23512 3.14329 1.35309 4.46042C0.471066 5.77755 -0.000112336 7.32687 -0.000732422 8.91205V13.2197C-0.000732422 13.7094 0.193772 14.1789 0.539992 14.5252C0.886211 14.8714 1.35579 15.0659 1.84541 15.0659H3.07618C3.56581 15.0659 4.03538 14.8714 4.3816 14.5252C4.72782 14.1789 4.92233 13.7094 4.92233 13.2197V10.1428C4.92233 9.65319 4.72782 9.18362 4.3816 8.8374C4.03538 8.49118 3.56581 8.29667 3.07618 8.29667H1.25772C1.41125 6.61483 2.18791 5.05113 3.43523 3.91255C4.68254 2.77397 6.31041 2.14276 7.99924 2.14285H8.05078C9.73257 2.14995 11.3511 2.78492 12.5891 3.9233C13.8271 5.06167 14.5952 6.62137 14.7431 8.29667H12.9223C12.4327 8.29667 11.9631 8.49118 11.6169 8.8374C11.2707 9.18362 11.0761 9.65319 11.0761 10.1428V13.2197C11.0761 13.7094 11.2707 14.1789 11.6169 14.5252C11.9631 14.8714 12.4327 15.0659 12.9223 15.0659H14.1531C14.6427 15.0659 15.1123 14.8714 15.4585 14.5252C15.8047 14.1789 15.9992 13.7094 15.9992 13.2197V8.91205C16.0032 7.86558 15.8007 6.82859 15.4032 5.86052C15.0058 4.89244 14.4212 4.01231 13.6831 3.27054ZM3.07618 9.52744C3.23939 9.52744 3.39591 9.59227 3.51132 9.70768C3.62673 9.82308 3.69156 9.97961 3.69156 10.1428V13.2197C3.69156 13.3829 3.62673 13.5395 3.51132 13.6549C3.39591 13.7703 3.23939 13.8351 3.07618 13.8351H1.84541C1.68221 13.8351 1.52568 13.7703 1.41027 13.6549C1.29487 13.5395 1.23003 13.3829 1.23003 13.2197V9.52744H3.07618ZM14.7684 13.2197C14.7684 13.3829 14.7036 13.5395 14.5882 13.6549C14.4728 13.7703 14.3163 13.8351 14.1531 13.8351H12.9223C12.7591 13.8351 12.6026 13.7703 12.4872 13.6549C12.3717 13.5395 12.3069 13.3829 12.3069 13.2197V10.1428C12.3069 9.97961 12.3717 9.82308 12.4872 9.70768C12.6026 9.59227 12.7591 9.52744 12.9223 9.52744H14.7684V13.2197Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_23" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Deposit
                            </span>
                        </a>
                    </li>
                    <!-- Withdraw -->
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route('admin.withdraw') }}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M4.30692 10.1428V13.2197C4.30692 13.5461 4.17725 13.8592 3.94644 14.09C3.71562 14.3208 3.40257 14.4505 3.07615 14.4505H1.84539C1.51897 14.4505 1.20592 14.3208 0.975107 14.09C0.744293 13.8592 0.614624 13.5461 0.614624 13.2197V8.91205H3.07615C3.40257 8.91205 3.71562 9.04172 3.94644 9.27253C4.17725 9.50334 4.30692 9.81639 4.30692 10.1428ZM12.9223 8.91205C12.5959 8.91205 12.2828 9.04172 12.052 9.27253C11.8212 9.50334 11.6915 9.81639 11.6915 10.1428V13.2197C11.6915 13.5461 11.8212 13.8592 12.052 14.09C12.2828 14.3208 12.5959 14.4505 12.9223 14.4505H14.153C14.4795 14.4505 14.7925 14.3208 15.0233 14.09C15.2541 13.8592 15.3838 13.5461 15.3838 13.2197V8.91205H12.9223Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_23)] group-[.active]/menu-link:fill-[url(#g_23)] dark:fill-none" />
                                    <path
                                        d="M13.6831 3.27054C12.5654 2.14638 11.1393 1.37929 9.58525 1.06649C8.03123 0.75368 6.41934 0.909233 4.95382 1.51343C3.4883 2.11763 2.23512 3.14329 1.35309 4.46042C0.471066 5.77755 -0.000112336 7.32687 -0.000732422 8.91205V13.2197C-0.000732422 13.7094 0.193772 14.1789 0.539992 14.5252C0.886211 14.8714 1.35579 15.0659 1.84541 15.0659H3.07618C3.56581 15.0659 4.03538 14.8714 4.3816 14.5252C4.72782 14.1789 4.92233 13.7094 4.92233 13.2197V10.1428C4.92233 9.65319 4.72782 9.18362 4.3816 8.8374C4.03538 8.49118 3.56581 8.29667 3.07618 8.29667H1.25772C1.41125 6.61483 2.18791 5.05113 3.43523 3.91255C4.68254 2.77397 6.31041 2.14276 7.99924 2.14285H8.05078C9.73257 2.14995 11.3511 2.78492 12.5891 3.9233C13.8271 5.06167 14.5952 6.62137 14.7431 8.29667H12.9223C12.4327 8.29667 11.9631 8.49118 11.6169 8.8374C11.2707 9.18362 11.0761 9.65319 11.0761 10.1428V13.2197C11.0761 13.7094 11.2707 14.1789 11.6169 14.5252C11.9631 14.8714 12.4327 15.0659 12.9223 15.0659H14.1531C14.6427 15.0659 15.1123 14.8714 15.4585 14.5252C15.8047 14.1789 15.9992 13.7094 15.9992 13.2197V8.91205C16.0032 7.86558 15.8007 6.82859 15.4032 5.86052C15.0058 4.89244 14.4212 4.01231 13.6831 3.27054ZM3.07618 9.52744C3.23939 9.52744 3.39591 9.59227 3.51132 9.70768C3.62673 9.82308 3.69156 9.97961 3.69156 10.1428V13.2197C3.69156 13.3829 3.62673 13.5395 3.51132 13.6549C3.39591 13.7703 3.23939 13.8351 3.07618 13.8351H1.84541C1.68221 13.8351 1.52568 13.7703 1.41027 13.6549C1.29487 13.5395 1.23003 13.3829 1.23003 13.2197V9.52744H3.07618ZM14.7684 13.2197C14.7684 13.3829 14.7036 13.5395 14.5882 13.6549C14.4728 13.7703 14.3163 13.8351 14.1531 13.8351H12.9223C12.7591 13.8351 12.6026 13.7703 12.4872 13.6549C12.3717 13.5395 12.3069 13.3829 12.3069 13.2197V10.1428C12.3069 9.97961 12.3717 9.82308 12.4872 9.70768C12.6026 9.59227 12.7591 9.52744 12.9223 9.52744H14.7684V13.2197Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_23" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Withdraw
                            </span>
                        </a>
                    </li>


                    {{-- Investment --}}
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="#"
                            class="dropdown-button top-layer relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition peer/dp-btn group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M15.4094 7.67775C15.4094 9.07945 14.9937 10.4497 14.215 11.6152C13.4362 12.7806 12.3294 13.689 11.0344 14.2254C9.73938 14.7618 8.31439 14.9022 6.93962 14.6287C5.56485 14.3553 4.30204 13.6803 3.31089 12.6891C2.31973 11.698 1.64475 10.4352 1.37129 9.06038C1.09783 7.68561 1.23818 6.26062 1.77459 4.96562C2.311 3.67061 3.21937 2.56375 4.38485 1.78501C5.55032 1.00626 6.92055 0.590607 8.32225 0.590607C10.2019 0.590607 12.0045 1.33729 13.3336 2.66638C14.6627 3.99548 15.4094 5.79812 15.4094 7.67775Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_4)] group-[.active]/menu-link:fill-[url(#g_4)] dark:fill-none" />
                                    <path
                                        d="M12.4564 7.67774C12.4605 10.0641 11.9955 12.428 11.0877 14.635C11.0437 14.7438 10.9682 14.8371 10.8709 14.9028C10.7736 14.9686 10.6589 15.0038 10.5414 15.0041C10.4655 15.0034 10.3903 14.9883 10.32 14.9598C10.2481 14.9303 10.1828 14.887 10.1277 14.8322C10.0727 14.7775 10.0289 14.7124 9.99905 14.6408C9.96915 14.5691 9.95368 14.4923 9.95351 14.4146C9.95335 14.337 9.96849 14.2601 9.99808 14.1883C10.8465 12.1228 11.2805 9.91068 11.2752 7.67774C11.2752 7.52111 11.3375 7.37089 11.4482 7.26013C11.559 7.14937 11.7092 7.08715 11.8658 7.08715C12.0225 7.08715 12.1727 7.14937 12.2834 7.26013C12.3942 7.37089 12.4564 7.52111 12.4564 7.67774ZM8.32226 4.72477C8.73762 4.72506 9.14826 4.81284 9.52744 4.98239C9.90661 5.15195 10.2458 5.39947 10.523 5.70885C10.5743 5.76805 10.6369 5.81644 10.7071 5.85122C10.7773 5.88599 10.8537 5.90645 10.9319 5.9114C11.0101 5.91635 11.0885 5.9057 11.1625 5.88005C11.2366 5.85441 11.3047 5.81429 11.3631 5.76204C11.4215 5.70978 11.4689 5.64643 11.5026 5.57568C11.5362 5.50493 11.5555 5.42819 11.5592 5.34993C11.5629 5.27167 11.551 5.19345 11.5241 5.11984C11.4973 5.04622 11.4561 4.97868 11.403 4.92114C10.8447 4.29731 10.1102 3.85767 9.29662 3.66036C8.48305 3.46306 7.62876 3.5174 6.84674 3.81618C6.06473 4.11497 5.39184 4.64413 4.91711 5.33366C4.44238 6.02319 4.18816 6.84059 4.1881 7.67774C4.18802 9.3783 3.75619 11.051 2.93308 12.5391C2.89547 12.6069 2.87159 12.6815 2.8628 12.7586C2.85402 12.8357 2.86051 12.9138 2.8819 12.9884C2.90329 13.063 2.93916 13.1326 2.98746 13.1933C3.03576 13.2541 3.09555 13.3047 3.16341 13.3423C3.23128 13.3799 3.30589 13.4038 3.38298 13.4126C3.46007 13.4213 3.53814 13.4149 3.61272 13.3935C3.68731 13.3721 3.75695 13.3362 3.81767 13.2879C3.87839 13.2396 3.92901 13.1798 3.96662 13.112C4.88651 11.4484 5.36913 9.57866 5.36929 7.67774C5.36929 6.89456 5.6804 6.14346 6.23419 5.58967C6.78798 5.03588 7.53908 4.72477 8.32226 4.72477ZM8.32226 5.54485e-06C7.45044 -0.00104347 6.58484 0.14676 5.76277 0.437046C5.61773 0.491275 5.49978 0.6003 5.43434 0.740642C5.3689 0.880983 5.36119 1.04141 5.41288 1.18738C5.46457 1.33335 5.57152 1.45318 5.7107 1.52106C5.84987 1.58895 6.01014 1.59945 6.15699 1.55032C7.13706 1.20474 8.18569 1.09918 9.21497 1.24249C10.2442 1.3858 11.2242 1.7738 12.0725 2.37395C12.9209 2.97411 13.6131 3.76892 14.0909 4.69176C14.5687 5.61459 14.8183 6.63854 14.8188 7.67774C14.8195 9.2234 14.6477 10.7643 14.3065 12.2718C14.2718 12.4242 14.2989 12.5842 14.382 12.7166C14.465 12.849 14.5971 12.9432 14.7494 12.9783C14.7925 12.9883 14.8366 12.9933 14.8808 12.9931C15.0147 12.9931 15.1446 12.9475 15.2493 12.864C15.3539 12.7804 15.427 12.6638 15.4567 12.5332C15.8174 10.9399 15.9997 9.31137 16 7.67774C15.9978 5.64214 15.1883 3.69053 13.7489 2.25114C12.3095 0.811747 10.3579 0.00215518 8.32226 5.54485e-06ZM3.98951 2.83634C4.04734 2.78462 4.09441 2.72201 4.12805 2.6521C4.16168 2.58218 4.18122 2.50633 4.18554 2.42886C4.18985 2.3514 4.17887 2.27384 4.15322 2.20062C4.12756 2.1274 4.08774 2.05995 4.03602 2.00212C3.9843 1.94429 3.92169 1.89722 3.85178 1.86358C3.78186 1.82995 3.70601 1.81042 3.62854 1.8061C3.55108 1.80178 3.47352 1.81276 3.4003 1.83841C3.32708 1.86407 3.25963 1.90389 3.2018 1.95561C2.39765 2.67636 1.75432 3.55841 1.31371 4.54431C0.873105 5.53021 0.645093 6.59786 0.644526 7.67774C0.646178 8.61202 0.444658 9.53549 0.053931 10.3841C0.0215505 10.4546 0.00336938 10.5308 0.000425572 10.6083C-0.00251823 10.6858 0.00983299 10.7631 0.036774 10.8359C0.0911839 10.9828 0.201718 11.102 0.344061 11.1674C0.486403 11.2328 0.648894 11.239 0.795787 11.1846C0.94268 11.1302 1.06194 11.0196 1.12734 10.8773C1.58938 9.87403 1.82768 8.78228 1.82572 7.67774C1.82622 6.76407 2.01916 5.86074 2.39197 5.02658C2.76479 4.19243 3.30911 3.44615 3.98951 2.83634ZM7.2806 13.0477C7.13834 12.9826 6.97603 12.9765 6.82931 13.0309C6.68259 13.0853 6.56345 13.1957 6.49806 13.3379C6.35558 13.6479 6.19907 13.9572 6.03297 14.2562C5.9952 14.3241 5.9712 14.3988 5.96234 14.476C5.95348 14.5531 5.95993 14.6313 5.98133 14.706C6.00273 14.7807 6.03865 14.8504 6.08703 14.9112C6.13542 14.972 6.19532 15.0226 6.2633 15.0602C6.35061 15.1089 6.44901 15.1344 6.549 15.134C6.65445 15.1341 6.75798 15.1059 6.84886 15.0524C6.93973 14.9989 7.01463 14.9221 7.06577 14.8298C7.2459 14.5043 7.4157 14.1654 7.57073 13.8317C7.60323 13.7612 7.62151 13.685 7.62451 13.6074C7.62752 13.5298 7.61519 13.4524 7.58825 13.3796C7.5613 13.3068 7.52026 13.24 7.46747 13.183C7.41468 13.1261 7.35118 13.0801 7.2806 13.0477ZM8.32226 7.08715C8.16563 7.08715 8.01541 7.14937 7.90465 7.26013C7.79389 7.37089 7.73167 7.52111 7.73167 7.67774C7.7321 8.82316 7.58849 9.96408 7.30422 11.0737C7.26521 11.2253 7.28801 11.3862 7.36761 11.5211C7.44721 11.6559 7.5771 11.7536 7.72871 11.7927C7.77697 11.805 7.82657 11.8112 7.87636 11.8112C8.00722 11.8111 8.13434 11.7675 8.23776 11.6873C8.34118 11.6072 8.41505 11.4949 8.44776 11.3682C8.75728 10.1622 8.91355 8.92207 8.91286 7.677C8.91266 7.5205 8.85035 7.37047 8.73962 7.25987C8.62888 7.14927 8.47877 7.08715 8.32226 7.08715Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_4" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Users Investment
                            </span>
                        </a>
                        <div
                            class="dropdown-content transition-all duration-300 max-h-0 overflow-hidden hidden group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:!max-h-max group-data-[sidebar-size=sm]:overflow-visible group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:shadow-menu-dropdown">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="{{ route('admin.plan') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Investment Plan
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="{{ route('admin.plan.history') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Investment History
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>










                </ul>
            </div>
        </div>


        <!-- Logout Link -->
        <div class="mt-auto px-7 py-6 group-data-[sidebar-size=sm]:px-2">
            <form method="POST"
                action="{{ route('logout') }}"class="flex-center-between text-gray-500 dark:text-dark-text font-semibold leading-none bg-gray-200 dark:bg-[#090927] dark:group-data-[sidebar-size=sm]:bg-dark-card-shade rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square">
                @csrf

                <button class="group-data-[sidebar-size=sm]:hidden block"> logout </button>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    fill="none">
                    <path
                        d="M6.66645 15.3328C6.66645 15.5096 6.59621 15.6792 6.47119 15.8042C6.34617 15.9292 6.17661 15.9995 5.9998 15.9995H1.33329C0.979679 15.9995 0.640552 15.859 0.390511 15.609C0.140471 15.3589 0 15.0198 0 14.6662V1.33329C0 0.979679 0.140471 0.640552 0.390511 0.390511C0.640552 0.140471 0.979679 0 1.33329 0H5.9998C6.17661 0 6.34617 0.0702357 6.47119 0.195256C6.59621 0.320276 6.66645 0.48984 6.66645 0.666645C6.66645 0.84345 6.59621 1.01301 6.47119 1.13803C6.34617 1.26305 6.17661 1.33329 5.9998 1.33329H1.33329V14.6662H5.9998C6.17661 14.6662 6.34617 14.7364 6.47119 14.8614C6.59621 14.9865 6.66645 15.156 6.66645 15.3328ZM15.8045 8.47139L12.4713 11.8046C12.378 11.898 12.2592 11.9615 12.1298 11.9873C12.0004 12.0131 11.8663 11.9999 11.7444 11.9494C11.6225 11.8989 11.5184 11.8133 11.4451 11.7036C11.3719 11.5939 11.3329 11.4649 11.333 11.333V8.66638H5.9998C5.823 8.66638 5.65343 8.59615 5.52841 8.47113C5.40339 8.34611 5.33316 8.17654 5.33316 7.99974C5.33316 7.82293 5.40339 7.65337 5.52841 7.52835C5.65343 7.40333 5.823 7.33309 5.9998 7.33309H11.333V4.66651C11.3329 4.53459 11.3719 4.4056 11.4451 4.29587C11.5184 4.18615 11.6225 4.10062 11.7444 4.05012C11.8663 3.99962 12.0004 3.98642 12.1298 4.01218C12.2592 4.03795 12.378 4.10152 12.4713 4.19486L15.8045 7.52809C15.8665 7.59 15.9156 7.66352 15.9492 7.74445C15.9827 7.82538 16 7.91213 16 7.99974C16 8.08735 15.9827 8.17409 15.9492 8.25502C15.9156 8.33595 15.8665 8.40948 15.8045 8.47139ZM14.3879 7.99974L12.6663 6.27563V9.72385L14.3879 7.99974Z"
                        fill="currentColor" />
                </svg>
            </form>

        </div>
    </div>
    <!-- End App Menu -->


</div>
