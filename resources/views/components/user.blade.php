<div>
    <!-- Start App Menu -->
    <div id="app-menu-drawer"
        class="app-menu flex flex-col gap-y-2.5 bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max xl:translate-x-0 rounded-r-10 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:bottom-4 z-backdrop xl:group-data-[theme-width=box]:left-auto dk-theme-card-square ac-transition"
        tabindex="-1">
        <div
            class="px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:px-2 group-data-[sidebar-size=sm]:justify-center">
            <a href="{{ route('dashboard') }}" class="group-data-[sidebar-size=lg]:block hidden">
                <img src="/frontend/img/app-logo.png" height="50" width="80" alt="logo"
                    class="group-[.dark]:hidden" />
                <img src="/frontend/img/app-logo.png" height="50" width="80" alt="logo"
                    class="group-[.light]:hidden" />
            </a>
            <a href="{{ route('dashboard') }}" class="group-data-[sidebar-size=lg]:hidden block">
                <img src="/frontend/img/app-logo.png" height="50" width="80" alt="logo" />
            </a>
        </div>
        <div id="app-menu-scrollbar" data-scrollbar
            class="pl-4 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
            <div class="group-data-[sidebar-size=lg]:max-h-full">
                <ul id="navbar-nav"
                    class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">

                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route('dashboard') }}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M6.54548 3.63639C6.54548 4.21175 6.37486 4.77419 6.05521 5.25259C5.73555 5.73099 5.28121 6.10385 4.74965 6.32404C4.21808 6.54422 3.63316 6.60183 3.06885 6.48958C2.50454 6.37733 1.98619 6.10027 1.57935 5.69342C1.17251 5.28658 0.895441 4.76823 0.783194 4.20392C0.670946 3.63961 0.728555 3.05469 0.948738 2.52313C1.16892 1.99156 1.54179 1.53722 2.02018 1.21757C2.49858 0.897911 3.06102 0.727296 3.63639 0.727296C4.40793 0.727296 5.14786 1.03379 5.69342 1.57935C6.23898 2.12491 6.54548 2.86485 6.54548 3.63639ZM12.3637 6.54548C12.939 6.54548 13.5015 6.37486 13.9799 6.05521C14.4583 5.73555 14.8311 5.28121 15.0513 4.74965C15.2715 4.21808 15.3291 3.63316 15.2168 3.06885C15.1046 2.50454 14.8275 1.98619 14.4207 1.57935C14.0139 1.17251 13.4955 0.895441 12.9312 0.783194C12.3669 0.670946 11.782 0.728555 11.2504 0.948738C10.7188 1.16892 10.2645 1.54179 9.94484 2.02018C9.62518 2.49858 9.45457 3.06102 9.45457 3.63639C9.45457 4.40793 9.76106 5.14786 10.3066 5.69342C10.8522 6.23898 11.5921 6.54548 12.3637 6.54548ZM3.63639 9.45457C3.06102 9.45457 2.49858 9.62518 2.02018 9.94484C1.54179 10.2645 1.16892 10.7188 0.948738 11.2504C0.728555 11.782 0.670946 12.3669 0.783194 12.9312C0.895441 13.4955 1.17251 14.0139 1.57935 14.4207C1.98619 14.8275 2.50454 15.1046 3.06885 15.2168C3.63316 15.3291 4.21808 15.2715 4.74965 15.0513C5.28121 14.8311 5.73555 14.4583 6.05521 13.9799C6.37486 13.5015 6.54548 12.939 6.54548 12.3637C6.54548 11.5921 6.23898 10.8522 5.69342 10.3066C5.14786 9.76106 4.40793 9.45457 3.63639 9.45457ZM12.3637 9.45457C11.7883 9.45457 11.2259 9.62518 10.7475 9.94484C10.2691 10.2645 9.89619 10.7188 9.67601 11.2504C9.45582 11.782 9.39822 12.3669 9.51046 12.9312C9.62271 13.4955 9.89978 14.0139 10.3066 14.4207C10.7135 14.8275 11.2318 15.1046 11.7961 15.2168C12.3604 15.3291 12.9453 15.2715 13.4769 15.0513C14.0085 14.8311 14.4628 14.4583 14.7825 13.9799C15.1021 13.5015 15.2727 12.939 15.2727 12.3637C15.2727 11.5921 14.9663 10.8522 14.4207 10.3066C13.8751 9.76106 13.1352 9.45457 12.3637 9.45457Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_1)] group-[.active]/menu-link:fill-[url(#g_1)] dark:fill-none" />
                                    <path
                                        d="M3.63636 1.61884e-06C2.91716 1.61884e-06 2.21411 0.21327 1.61611 0.612839C1.01811 1.01241 0.552031 1.58033 0.276803 2.24479C0.00157558 2.90925 -0.0704365 3.6404 0.0698733 4.34578C0.210183 5.05117 0.556513 5.69911 1.06507 6.20766C1.57362 6.71622 2.22156 7.06255 2.92695 7.20286C3.63233 7.34316 4.36348 7.27115 5.02794 6.99593C5.6924 6.7207 6.26032 6.25462 6.65989 5.65662C7.05946 5.05862 7.27273 4.35557 7.27273 3.63636C7.27273 2.67194 6.88961 1.74702 6.20766 1.06507C5.52571 0.383117 4.60079 1.61884e-06 3.63636 1.61884e-06ZM3.63636 5.81818C3.20484 5.81818 2.78301 5.69022 2.42421 5.45048C2.06541 5.21074 1.78576 4.86998 1.62063 4.47131C1.45549 4.07263 1.41228 3.63394 1.49647 3.21071C1.58066 2.78748 1.78845 2.39872 2.09359 2.09359C2.39872 1.78845 2.78748 1.58066 3.21071 1.49647C3.63394 1.41228 4.07263 1.45549 4.47131 1.62063C4.86998 1.78576 5.21074 2.06541 5.45048 2.42421C5.69022 2.78301 5.81818 3.20484 5.81818 3.63636C5.81818 4.21502 5.58831 4.76997 5.17914 5.17914C4.76997 5.58831 4.21502 5.81818 3.63636 5.81818ZM12.3636 7.27273C13.0828 7.27273 13.7859 7.05946 14.3839 6.65989C14.9819 6.26032 15.448 5.6924 15.7232 5.02794C15.9984 4.36348 16.0704 3.63233 15.9301 2.92695C15.7898 2.22156 15.4435 1.57362 14.9349 1.06507C14.4264 0.556513 13.7784 0.210183 13.0731 0.0698733C12.3677 -0.0704365 11.6365 0.00157558 10.9721 0.276803C10.3076 0.552031 9.73968 1.01811 9.34011 1.61611C8.94054 2.21411 8.72727 2.91716 8.72727 3.63636C8.72727 4.60079 9.11039 5.52571 9.79234 6.20766C10.4743 6.88961 11.3992 7.27273 12.3636 7.27273ZM12.3636 1.45455C12.7952 1.45455 13.217 1.58251 13.5758 1.82225C13.9346 2.06199 14.2142 2.40274 14.3794 2.80142C14.5445 3.20009 14.5877 3.63878 14.5035 4.06202C14.4193 4.48525 14.2115 4.87401 13.9064 5.17914C13.6013 5.48428 13.2125 5.69207 12.7893 5.77626C12.3661 5.86045 11.9274 5.81724 11.5287 5.6521C11.13 5.48696 10.7893 5.20732 10.5495 4.84852C10.3098 4.48972 10.1818 4.06789 10.1818 3.63636C10.1818 3.05771 10.4117 2.50276 10.8209 2.09359C11.23 1.68442 11.785 1.45455 12.3636 1.45455ZM3.63636 8.72727C2.91716 8.72727 2.21411 8.94054 1.61611 9.34011C1.01811 9.73968 0.552031 10.3076 0.276803 10.9721C0.00157558 11.6365 -0.0704365 12.3677 0.0698733 13.0731C0.210183 13.7784 0.556513 14.4264 1.06507 14.9349C1.57362 15.4435 2.22156 15.7898 2.92695 15.9301C3.63233 16.0704 4.36348 15.9984 5.02794 15.7232C5.6924 15.448 6.26032 14.9819 6.65989 14.3839C7.05946 13.7859 7.27273 13.0828 7.27273 12.3636C7.27273 11.3992 6.88961 10.4743 6.20766 9.79234C5.52571 9.11039 4.60079 8.72727 3.63636 8.72727ZM3.63636 14.5455C3.20484 14.5455 2.78301 14.4175 2.42421 14.1777C2.06541 13.938 1.78576 13.5973 1.62063 13.1986C1.45549 12.7999 1.41228 12.3612 1.49647 11.938C1.58066 11.5148 1.78845 11.126 2.09359 10.8209C2.39872 10.5157 2.78748 10.3079 3.21071 10.2237C3.63394 10.1396 4.07263 10.1828 4.47131 10.3479C4.86998 10.513 5.21074 10.7927 5.45048 11.1515C5.69022 11.5103 5.81818 11.9321 5.81818 12.3636C5.81818 12.9423 5.58831 13.4972 5.17914 13.9064C4.76997 14.3156 4.21502 14.5455 3.63636 14.5455ZM12.3636 8.72727C11.6444 8.72727 10.9414 8.94054 10.3434 9.34011C9.74538 9.73968 9.2793 10.3076 9.00407 10.9721C8.72884 11.6365 8.65683 12.3677 8.79714 13.0731C8.93745 13.7784 9.28378 14.4264 9.79234 14.9349C10.3009 15.4435 10.9488 15.7898 11.6542 15.9301C12.3596 16.0704 13.0908 15.9984 13.7552 15.7232C14.4197 15.448 14.9876 14.9819 15.3872 14.3839C15.7867 13.7859 16 13.0828 16 12.3636C16 11.3992 15.6169 10.4743 14.9349 9.79234C14.253 9.11039 13.3281 8.72727 12.3636 8.72727ZM12.3636 14.5455C11.9321 14.5455 11.5103 14.4175 11.1515 14.1777C10.7927 13.938 10.513 13.5973 10.3479 13.1986C10.1828 12.7999 10.1396 12.3612 10.2237 11.938C10.3079 11.5148 10.5157 11.126 10.8209 10.8209C11.126 10.5157 11.5148 10.3079 11.938 10.2237C12.3612 10.1396 12.7999 10.1828 13.1986 10.3479C13.5973 10.513 13.938 10.7927 14.1777 11.1515C14.4175 11.5103 14.5455 11.9321 14.5455 12.3636C14.5455 12.9423 14.3156 13.4972 13.9064 13.9064C13.4972 14.3156 12.9423 14.5455 12.3636 14.5455Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_1" x1="2.18655" y1="3.46529" x2="8.18057"
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
                                Dashboard
                            </span>
                        </a>
                    </li>
                    {{-- deposit --}}
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="#"
                            class="dropdown-button top-layer relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition peer/dp-btn group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M13.9254 8.59292L9.58248 12.9359C9.13796 13.3803 8.53513 13.63 7.90655 13.63C7.27798 13.63 6.67514 13.3803 6.23063 12.9359L3.06396 9.76922C2.61954 9.3247 2.36987 8.72186 2.36987 8.09329C2.36987 7.46472 2.61954 6.86188 3.06396 6.41736L7.40692 2.0744L13.9254 8.59292Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_2)] group-[.active]/menu-link:fill-[url(#g_2)] dark:fill-none" />
                                    <path
                                        d="M15.8255 3.72906C15.7705 3.67397 15.7051 3.63026 15.6332 3.60044C15.5612 3.57062 15.4841 3.55527 15.4062 3.55527C15.3284 3.55527 15.2513 3.57062 15.1793 3.60044C15.1074 3.63026 15.042 3.67397 14.987 3.72906L12.4434 6.2734L9.72574 3.55574L12.2701 1.01214C12.3813 0.90095 12.4437 0.750144 12.4437 0.592898C12.4437 0.435651 12.3813 0.284846 12.2701 0.173656C12.1589 0.0624658 12.0081 0 11.8508 0C11.6936 0 11.5428 0.0624658 11.4316 0.173656L8.888 2.718L6.93697 0.766224C6.82578 0.655034 6.67497 0.592568 6.51772 0.592568C6.36048 0.592568 6.20967 0.655034 6.09848 0.766224C5.98729 0.877414 5.92483 1.02822 5.92483 1.18547C5.92483 1.34271 5.98729 1.49352 6.09848 1.60471L6.56883 2.07432L2.64307 6.00008C2.36793 6.27521 2.14967 6.60184 2.00077 6.96132C1.85186 7.32079 1.77522 7.70608 1.77522 8.09518C1.77522 8.48428 1.85186 8.86957 2.00077 9.22905C2.14967 9.58852 2.36793 9.91515 2.64307 10.1903L3.80673 11.3539L0.172801 14.9879C0.117746 15.0429 0.0740729 15.1083 0.044277 15.1802C0.0144811 15.2521 -0.000854492 15.3292 -0.000854492 15.4071C-0.000854492 15.485 0.0144811 15.5621 0.044277 15.634C0.0740729 15.7059 0.117746 15.7713 0.172801 15.8263C0.283991 15.9375 0.434797 16 0.592043 16C0.669904 16 0.747002 15.9847 0.818935 15.9549C0.890869 15.9251 0.956229 15.8814 1.01129 15.8263L4.64743 12.1902L5.81109 13.3539C6.08621 13.629 6.41284 13.8472 6.77232 13.9962C7.1318 14.1451 7.51709 14.2217 7.90619 14.2217C8.29528 14.2217 8.68057 14.1451 9.04005 13.9962C9.39953 13.8472 9.72616 13.629 10.0013 13.3539L13.927 9.42809L14.3967 9.89844C14.4517 9.9535 14.5171 9.99717 14.589 10.027C14.6609 10.0568 14.738 10.0721 14.8159 10.0721C14.8938 10.0721 14.9709 10.0568 15.0428 10.027C15.1147 9.99717 15.1801 9.9535 15.2351 9.89844C15.2902 9.84338 15.3339 9.77802 15.3637 9.70609C15.3935 9.63416 15.4088 9.55706 15.4088 9.4792C15.4088 9.40134 15.3935 9.32424 15.3637 9.25231C15.3339 9.18037 15.2902 9.11501 15.2351 9.05996L13.2811 7.11115L15.8255 4.56755C15.8806 4.51252 15.9243 4.44716 15.9541 4.37522C15.9839 4.30329 15.9993 4.22618 15.9993 4.14831C15.9993 4.07043 15.9839 3.99332 15.9541 3.92139C15.9243 3.84945 15.8806 3.7841 15.8255 3.72906ZM9.16354 12.5183C8.99845 12.6835 8.80244 12.8145 8.5867 12.9039C8.37096 12.9933 8.13972 13.0393 7.90619 13.0393C7.67266 13.0393 7.44141 12.9933 7.22567 12.9039C7.00993 12.8145 6.81392 12.6835 6.64883 12.5183L3.48081 9.35031C3.31564 9.18523 3.18461 8.98921 3.09522 8.77347C3.00582 8.55773 2.95981 8.32649 2.95981 8.09296C2.95981 7.85943 3.00582 7.62819 3.09522 7.41245C3.18461 7.1967 3.31564 7.00069 3.48081 6.8356L7.40658 2.90984L13.0871 8.59257L9.16354 12.5183Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_2" x1="2.18655" y1="3.46529" x2="8.18057"
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
                        <div
                            class="dropdown-content transition-all duration-300 max-h-0 overflow-hidden hidden group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:!max-h-max group-data-[sidebar-size=sm]:overflow-visible group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:shadow-menu-dropdown">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="{{ route('deposit') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Deposit
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="{{ route('depositHistory') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Deposit History
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Withdraw --}}
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="#"
                            class="dropdown-button top-layer relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition peer/dp-btn group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                    viewBox="0 0 16 18" fill="none">
                                    <path
                                        d="M15.3757 4.92016L7.99533 9.22535L0.61499 4.92016L7.99533 0.61496L15.3757 4.92016Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_3)] group-[.active]/menu-link:fill-[url(#g_3)] dark:fill-none" />
                                    <path
                                        d="M15.9069 11.993C15.9882 12.134 16.0102 12.3014 15.9683 12.4586C15.9264 12.6158 15.8239 12.7499 15.6832 12.8317L8.30288 17.1369C8.20884 17.1918 8.10192 17.2207 7.99306 17.2207C7.88419 17.2207 7.77728 17.1918 7.68324 17.1369L0.302901 12.8317C0.164285 12.7484 0.0640537 12.6139 0.0239093 12.4572C-0.0162351 12.3006 0.00693775 12.1344 0.0884107 11.9947C0.169884 11.855 0.3031 11.753 0.459217 11.7108C0.615335 11.6686 0.781789 11.6896 0.922542 11.7693L7.99536 15.8938L15.0682 11.7693C15.2092 11.688 15.3766 11.666 15.5338 11.7079C15.691 11.7498 15.8251 11.8523 15.9069 11.993ZM15.0682 8.0791L7.99536 12.2036L0.922542 8.0791C0.782503 8.00938 0.621158 7.99564 0.471346 8.04068C0.321534 8.08572 0.194515 8.18615 0.116143 8.32154C0.0377701 8.45693 0.0139346 8.61709 0.0494874 8.76944C0.0850402 8.92178 0.177309 9.05485 0.307514 9.14156L7.68785 13.4468C7.78189 13.5016 7.88881 13.5305 7.99767 13.5305C8.10653 13.5305 8.21345 13.5016 8.30749 13.4468L15.6878 9.14156C15.7587 9.10146 15.8209 9.04767 15.8709 8.98333C15.9208 8.91898 15.9574 8.84536 15.9787 8.76674C15.9999 8.68811 16.0054 8.60605 15.9946 8.52532C15.9839 8.44458 15.9573 8.36678 15.9162 8.29642C15.8752 8.22607 15.8206 8.16456 15.7556 8.11548C15.6906 8.0664 15.6165 8.03071 15.5376 8.01049C15.4587 7.99027 15.3766 7.98593 15.296 7.99771C15.2154 8.00948 15.138 8.03715 15.0682 8.0791ZM0 4.92016C0.000245274 4.81244 0.0287797 4.70667 0.0827474 4.61344C0.136715 4.52021 0.214223 4.44279 0.307514 4.38893L7.68785 0.0837364C7.78189 0.028896 7.88881 0 7.99767 0C8.10653 0 8.21345 0.028896 8.30749 0.0837364L15.6878 4.38893C15.7807 4.4431 15.8577 4.52065 15.9112 4.61386C15.9648 4.70707 15.9929 4.81268 15.9929 4.92016C15.9929 5.02765 15.9648 5.13326 15.9112 5.22647C15.8577 5.31968 15.7807 5.39723 15.6878 5.45139L8.30749 9.75659C8.21345 9.81143 8.10653 9.84033 7.99767 9.84033C7.88881 9.84033 7.78189 9.81143 7.68785 9.75659L0.307514 5.45139C0.214223 5.39753 0.136715 5.32011 0.0827474 5.22688C0.0287797 5.13365 0.000245274 5.02789 0 4.92016ZM1.83586 4.92016L7.99536 8.51346L14.1549 4.92016L7.99536 1.32686L1.83586 4.92016Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_3" x1="2.18655" y1="3.46529" x2="8.18057"
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
                        <div
                            class="dropdown-content transition-all duration-300 max-h-0 overflow-hidden hidden group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:!max-h-max group-data-[sidebar-size=sm]:overflow-visible group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:shadow-menu-dropdown">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="{{ route('withdraw') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Withdraw
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="{{ route('withdrawHistory') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Withdraw History
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    {{-- Invest --}}
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
                                Invest
                            </span>
                        </a>
                        <div
                            class="dropdown-content transition-all duration-300 max-h-0 overflow-hidden hidden group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-tooltip group-data-[sidebar-size=sm]:!max-h-max group-data-[sidebar-size=sm]:overflow-visible group-data-[sidebar-size=lg]:block peer-[.show]/dp-btn:my-1.5 group-data-[sidebar-size=sm]:!my-0 group-data-[sidebar-size=lg]:w-[calc(theme('spacing.app-menu')_-_16px)] group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_2.5)] group-data-[sidebar-size=sm]:absolute group-data-[sidebar-size=sm]:left-[calc(theme('spacing.app-menu-sm')_*_0.9)] top-full group-data-[sidebar-size=sm]:group-hover/sm:block group-data-[sidebar-size=sm]:shadow-menu-dropdown">
                            <ul class="text-[14px] pl-1.5 group-data-[sidebar-size=sm]:pl-0">
                                <li class="relative group/sub">
                                    <a href="{{ route('plan') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Investment Plans
                                    </a>
                                </li>
                                <li class="relative group/sub">
                                    <a href="{{ route('planHistory') }}"
                                        class="relative peer/link text-gray-500 dark:text-dark-text-two font-medium leading-none px-5 py-2.5 group-data-[sidebar-size=lg]:pl-8 flex hover:text-primary-500 dark:hover:text-dark-text [&.active]:text-primary-500 dark:[&.active]:text-dark-text before:absolute before:top-[49%] before:-translate-y-1/2 before:left-4 before:size-1.5 before:rounded-50 before:border before:border-gray-400 dark:before:border-text-dark hover:before:border-none hover:before:bg-primary-400 dark:hover:before:bg-text-dark [&.active]:before:border-none group-data-[sidebar-size=sm]:after:block group-data-[sidebar-size=sm]:after:right-3 [&.active]:before:bg-primary-400 dark:[&.active]:before:bg-text-dark group-data-[sidebar-size=sm]:before:hidden">
                                        Investment History
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>






                    <li
                        class="!mt-5 pt-5 border-t border-gray-200 dark:border-dark-border-two mx-4 group-data-[sidebar-size=sm]:hidden">
                        <h5 class="text-heading text-lg leading-none font-semibold mb-5">
                            Help
                        </h5>
                    </li>

                    <!-- SUPPORT -->

                    <!-- ACCOUNT SETTING -->
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route('profile.edit') }}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                    viewBox="0 0 16 15" fill="none">
                                    <path
                                        d="M15.2924 6.12123L13.0175 4.82561C12.9718 4.74275 12.924 4.66205 12.8747 4.58205L12.8661 2.01081C12.1472 1.40407 11.3201 0.93857 10.4284 0.638763L8.14287 1.91653C8.04716 1.91653 7.95074 1.91653 7.85718 1.91653L5.57163 0.638763C4.6802 0.939547 3.85363 1.40603 3.13537 2.01366L3.12395 4.58491C3.07395 4.6649 3.0261 4.74633 2.9811 4.82846L0.706978 6.12123C0.527687 7.0281 0.527687 7.9613 0.706978 8.86817L2.98181 10.1638C3.02753 10.2466 3.07538 10.3274 3.12466 10.4073L3.13323 12.9786C3.85227 13.5859 4.67958 14.0519 5.57163 14.3521L7.85718 13.0757C7.95289 13.0757 8.04931 13.0757 8.14287 13.0757L10.4284 14.3521C11.3191 14.051 12.1449 13.5846 12.8625 12.9772L12.874 10.4059C12.924 10.3259 12.9718 10.2445 13.0168 10.1624L15.2909 8.8696C15.4709 7.96236 15.4714 7.02865 15.2924 6.12123ZM8.00002 10.3524C7.43498 10.3524 6.88262 10.1848 6.4128 9.87087C5.94297 9.55695 5.57679 9.11075 5.36056 8.58872C5.14432 8.06668 5.08775 7.49224 5.19798 6.93805C5.30822 6.38386 5.58032 5.8748 5.97987 5.47525C6.37942 5.0757 6.88847 4.80361 7.44266 4.69337C7.99686 4.58314 8.57129 4.63971 9.09333 4.85595C9.61537 5.07218 10.0616 5.43836 10.3755 5.90818C10.6894 6.378 10.857 6.93036 10.857 7.49541C10.857 8.25312 10.556 8.97979 10.0202 9.51557C9.4844 10.0514 8.75773 10.3524 8.00002 10.3524Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_24)] group-[.active]/menu-link:fill-[url(#g_24)] dark:fill-none" />
                                    <path
                                        d="M7.99994 4.0671C7.32189 4.0671 6.65905 4.26817 6.09527 4.64488C5.53148 5.02159 5.09207 5.55702 4.83258 6.18347C4.5731 6.80991 4.50521 7.49923 4.63749 8.16426C4.76978 8.82929 5.09629 9.44016 5.57575 9.91962C6.05521 10.3991 6.66608 10.7256 7.33111 10.8579C7.99614 10.9902 8.68546 10.9223 9.31191 10.6628C9.93835 10.4033 10.4738 9.96389 10.8505 9.40011C11.2272 8.83632 11.4283 8.17349 11.4283 7.49543C11.4273 6.58647 11.0658 5.71501 10.4231 5.07228C9.78036 4.42955 8.9089 4.06805 7.99994 4.0671ZM7.99994 9.78098C7.5479 9.78098 7.10602 9.64693 6.73016 9.39579C6.3543 9.14466 6.06136 8.7877 5.88837 8.37007C5.71538 7.95244 5.67012 7.49289 5.75831 7.04954C5.8465 6.60619 6.06418 6.19894 6.38382 5.8793C6.70346 5.55966 7.1107 5.34198 7.55406 5.2538C7.99741 5.16561 8.45696 5.21087 8.87459 5.38386C9.29222 5.55684 9.64917 5.84979 9.90031 6.22565C10.1514 6.6015 10.2855 7.04339 10.2855 7.49543C10.2855 8.10159 10.0447 8.68293 9.61607 9.11156C9.18745 9.54018 8.60611 9.78098 7.99994 9.78098ZM15.8522 6.01054C15.8363 5.93007 15.8033 5.85398 15.7553 5.78743C15.7074 5.72088 15.6457 5.66543 15.5744 5.62485L13.4438 4.41065L13.4353 2.0094C13.435 1.9267 13.4168 1.84504 13.3819 1.77007C13.347 1.69509 13.2962 1.62858 13.2331 1.57514C12.4603 0.921401 11.5703 0.420414 10.6105 0.0988186C10.5349 0.0732346 10.4548 0.0637667 10.3753 0.0710246C10.2958 0.0782824 10.2188 0.102105 10.1491 0.140958L7.99994 1.3423L5.84867 0.138816C5.77893 0.0997437 5.70176 0.075741 5.62216 0.0683592C5.54256 0.0609775 5.4623 0.0703809 5.38656 0.0959616C4.42732 0.419622 3.53829 0.922549 2.76675 1.578C2.70373 1.63136 2.65303 1.69775 2.61813 1.7726C2.58324 1.84744 2.56498 1.92896 2.56462 2.01154L2.55391 4.41494L0.423346 5.62914C0.352067 5.66971 0.290359 5.72516 0.242418 5.79172C0.194476 5.85827 0.161424 5.93436 0.145509 6.01482C-0.0494796 6.99467 -0.0494796 8.00333 0.145509 8.98318C0.161424 9.06364 0.194476 9.13973 0.242418 9.20629C0.290359 9.27284 0.352067 9.32829 0.423346 9.36887L2.55391 10.5831L2.56248 12.985C2.56274 13.0677 2.58094 13.1494 2.61584 13.2244C2.65074 13.2993 2.7015 13.3658 2.76461 13.4193C3.53746 14.073 4.42745 14.574 5.38727 14.8956C5.46286 14.9212 5.54297 14.9307 5.62244 14.9234C5.7019 14.9161 5.77897 14.8923 5.84867 14.8535L7.99994 13.6486L10.1512 14.852C10.2364 14.8995 10.3323 14.9241 10.4298 14.9235C10.4922 14.9234 10.5542 14.9133 10.6133 14.8935C11.5723 14.57 12.4613 14.0675 13.2331 13.4129C13.2962 13.3595 13.3469 13.2931 13.3818 13.2183C13.4166 13.1434 13.4349 13.0619 13.4353 12.9793L13.446 10.5759L15.5765 9.36172C15.6478 9.32115 15.7095 9.26569 15.7575 9.19914C15.8054 9.13259 15.8385 9.0565 15.8544 8.97604C16.0483 7.99697 16.0476 6.98932 15.8522 6.01054ZM14.7809 8.50393L12.7403 9.66456C12.6509 9.7154 12.5769 9.78942 12.526 9.87883C12.4846 9.95025 12.4411 10.026 12.3968 10.0974C12.3401 10.1875 12.3099 10.2917 12.3096 10.3981L12.2989 12.7015C11.7504 13.1322 11.1394 13.4766 10.4869 13.7228L8.42848 12.5758C8.34303 12.5285 8.24688 12.5039 8.14922 12.5044H8.13565C8.04923 12.5044 7.96209 12.5044 7.87567 12.5044C7.77346 12.5019 7.67242 12.5265 7.58283 12.5758L5.52298 13.7257C4.86911 13.4814 4.25637 13.1386 3.70597 12.7093L3.69811 10.4095C3.69776 10.3029 3.66758 10.1985 3.61097 10.1081C3.56669 10.0367 3.52312 9.96525 3.48241 9.88954C3.43193 9.79876 3.35791 9.72326 3.26814 9.67099L1.22543 8.5075C1.11972 7.83884 1.11972 7.15773 1.22543 6.48907L3.26243 5.3263C3.35183 5.27546 3.42586 5.20144 3.4767 5.11203C3.51812 5.04061 3.56169 4.9649 3.60597 4.89347C3.66266 4.8034 3.69285 4.6992 3.69311 4.59278L3.70382 2.28938C4.25231 1.85865 4.86336 1.51423 5.51584 1.26802L7.5714 2.41508C7.66086 2.46467 7.76199 2.48934 7.86424 2.4865C7.95066 2.4865 8.0378 2.4865 8.12422 2.4865C8.22647 2.48934 8.3276 2.46467 8.41706 2.41508L10.4769 1.26516C11.1308 1.50948 11.7435 1.85222 12.2939 2.28152L12.3018 4.58135C12.3021 4.68798 12.3323 4.79239 12.3889 4.88276C12.4332 4.95418 12.4768 5.02561 12.5175 5.10132C12.568 5.1921 12.642 5.2676 12.7317 5.31987L14.7745 6.48336C14.8816 7.15253 14.8828 7.83438 14.778 8.50393H14.7809Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_24" x1="2.18655" y1="3.46529" x2="8.18057"
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
                                Setting
                            </span>
                        </a>
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



    <div>
        <div class="notification-container" id="notificationContainer"></div>

        <style>
            .notification-container {
                position: fixed;
                top: 20vh;
                right: 2vw;
                width: clamp(250px, 80vw, 350px);
                z-index: 100;
            }

            .notification {
                background-color: #333;
                color: #fff;
                padding: 1rem;
                margin-bottom: 0.5rem;
                border-radius: 0.5rem;
                box-shadow: 0 0.2rem 0.5rem rgba(0, 0, 0, 0.2);
                opacity: 0;
                transform: translateX(100%);
                transition: opacity 0.5s ease, transform 0.5s ease;
                font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            }

            .notification.show {
                opacity: 1;
                transform: translateX(0);
            }

            .notification.deposit {
                background-color: #28a745;
            }

            .notification.withdraw {
                background-color: #dc3545;
            }

            /* Small devices (phones, < 600px) */
            @media (max-width: 600px) {
                .notification-container {
                    width: 90vw;

                    right: 1vw;
                    top: 15vh;
                }

                .notification {
                    padding: 0.8rem;
                    font-size: 0.85rem;
                }
            }

            /* Medium devices (tablets, 600px - 900px) */
            @media (min-width: 601px) and (max-width: 900px) {
                .notification-container {
                    width: 85vw;
                    right: 1.5vw;
                    top: 15vh;
                }

                .notification {
                    padding: 0.9rem;
                    font-size: 1rem;
                }
            }

            /* Large devices (desktops, > 900px) */
            @media (min-width: 901px) {
                .notification-container {
                    width: 350px;
                    right: 2vw;
                }

                .notification {
                    padding: 1rem;
                    font-size: 1.1rem;
                }
            }
        </style>

        <script>
            const names = [
                'John Smith', 'Kate Johnson', 'Michael Brown', 'Abel Davis', 'Sarah Wilson',
                'David Martinez', 'Emma Taylor', 'James Anderson', 'Lisa Thomas', 'Thomas Lee',
                'Anna Garcia', 'Chris Walker', 'Julia Hall', 'Mark Allen', 'Sophie Young',
                'Paul Hernandez', 'Laura King', 'Steven Wright', 'Grace Lopez', 'Robert Scott',
                'Emily Green', 'Daniel Adams', 'Olivia Baker', 'William Gonzalez', 'Sophia Nelson',
                'Jacob Carter', 'Isabella Mitchell', 'Liam Perez', 'Charlotte Roberts', 'Ethan Turner',
                'Mia Phillips', 'Alexander Campbell', 'Amelia Parker', 'Lucas Evans', 'Harper Collins',
                'Benjamin Edwards', 'Evelyn Stewart', 'Jack Sanchez', 'Ava Morris', 'Logan Rogers',
                'Lily Reed', 'Mason Cook', 'Chloe Morgan', 'Henry Bell', 'Zoe Murphy', 'Gabriel Rivera',
                'Ella Cooper', 'Noah Bailey', 'Aria Howard', 'Jackson Kim', 'Scarlett Ward',
                'Sebastian Torres', 'Layla Peterson', 'Owen Gray', 'Mila Foster', 'Elijah Cox',
                'Hannah Brooks', 'Carter Butler', 'Avery Ross', 'Landon Hughes', 'Violet Sanders',
                'Luke Price', 'Madeline Kelly', 'Dylan Simmons', 'Penelope Bennett', 'Isaac Wood',
                'Victoria Myers', 'Samuel Ford', 'Hazel James', 'Julian Watson'
            ];

            function getRandomName() {
                return names[Math.floor(Math.random() * names.length)];
            }

            function getRandomAction() {
                return Math.random() > 0.5 ? 'deposited' : 'withdrew';
            }

            function getRandomAmount() {
                return Math.floor(Math.random() * (50000 - 2000 + 10)) + 500;
            }

            function createNotification() {
                const container = document.getElementById('notificationContainer');
                const notification = document.createElement('div');
                const name = getRandomName();
                const action = getRandomAction();
                const amount = getRandomAmount();
                notification.className = `notification ${action === 'deposited' ? 'deposit' : 'withdraw'}`;
                notification.textContent = `${name} ${action} $${amount}`;
                container.appendChild(notification);

                setTimeout(() => {
                    notification.classList.add('show');
                }, 100);

                setTimeout(() => {
                    notification.classList.remove('show');
                    setTimeout(() => {
                        notification.remove();
                    }, 500);
                }, 3000);
            }

            let notificationCount = 0;
            const interval = setInterval(() => {
                if (notificationCount < 20) {
                    createNotification();
                    notificationCount++;
                } else {
                    clearInterval(interval);
                }
            }, 6000);
        </script>
    </div>
</div>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '84046fb2a85047da8aaae20b98259220c3bf5ebf';
    window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
            o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = 'https://www.smartsuppchat.com/loader.js?';
        s.parentNode.insertBefore(c, s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
