<x-app-layout>

    <main>


        <!-- Start Main Content -->
        <div
            class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
            <div class="grid grid-cols-12 gap-x-4">
                <!-- Start Intro -->
                <div class="col-span-full 2xl:col-span-7 card p-0">
                    <div class="grid grid-cols-12 px-5 sm:px-12 py-11 relative overflow-hidden h-full">
                        <div class="col-span-full md:col-span-7 self-center inline-flex flex-col 2xl:block">
                            <p class="!leading-none text-sm lg:text-base text-gray-900 dark:text-dark-text">
                                Today is <span class="today">Thursday, 25 Jul 2024</span>
                            </p>
                            <h1 class="text-heading text-4xl xl:text-[42px] leading-[1.23] font-semibold mt-3">
                                <span class="flex items-center justify-start">
                                    <span class="shrink-0">Welcome Back.</span>
                                    <span
                                        class="select-none hidden md:inline-block animate-hand-wave origin-[70%_70%]">👋</span><br />
                                </span>
                                {{ Auth::user()->name }}
                            </h1>

                        </div>
                        <div
                            class="col-span-full md:col-span-5 flex-col items-center justify-center 2xl:block hidden md:flex">
                            <img src="/dash/images/loti/loti-admin-dashboard.svg" alt="online-workshop"
                                class="group-[.dark]:hidden" />
                            <img src="/dash/images/loti/loti-admin-dashboard-dark.svg" alt="online-workshop"
                                class="group-[.light]:hidden" />
                        </div>
                        <!-- Graphicla Elements -->
                        <ul>
                            <li class="absolute -top-[30px] left-1/2 animate-spin-slow">
                                <img src="/dash/images/element/graphical-element-1.svg" alt="element" />
                            </li>
                            <li class="absolute -bottom-[24px] left-1/4 animate-spin-slow">
                                <img src="/dash/images/element/graphical-element-2.svg" alt="element" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Intro -->
                <!-- Start Short Progress Card -->
                <!-- TradingView Widget BEGIN -->

                <div class="col-span-full 2xl:col-span-5 card">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>

                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                                "symbols": [{
                                        "description": "",
                                        "proName": "TURQUOISE:SHELL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:BARCL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:RRL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:BPL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:BTL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:TSCOL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:BATSL"
                                    },
                                    {
                                        "description": "",
                                        "proName": "TURQUOISE:ULVRL"
                                    }
                                ],
                                "showSymbolLogo": false,
                                "colorTheme": "light",
                                "isTransparent": false,
                                "displayMode": "regular",
                                "locale": "en"
                            }
                        </script>
                    </div>
                </div>
                <!-- TradingView Widget END -->
                <div class="col-span-full 2xl:col-span-5 card">
                    <div class="grid grid-cols-12 gap-4">
                        <!-- Total Revenue Progress Card -->
                        <div
                            class="col-span-full sm:col-span-6 p-[10px_16px] dk-border-one rounded-xl h-full dk-theme-card-square">
                            <div class="flex-center-between">
                                <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                    Balance
                                </h6>

                            </div>
                            <div
                                class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                                <div class="pb-8 shrink-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="card-title">
                                            $<span class="counter-value" data-value=" {{ number_format($user->balance, 2)  }}">0</span>
                                        </div>
                                        <div
                                            class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                viewBox="0 0 6 6" fill="none">
                                                <path
                                                    d="M3.38569 1.43565L5.45455 3.44715L6 2.91683L3 0L0 2.91683L0.545456 3.44715L2.6143 1.43565V6H3.38569V1.43565Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div class="grow self-center pb-3">
                                    <div id="admin-total-revenue-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-full sm:col-span-6 p-[10px_16px] dk-border-one rounded-xl h-full dk-theme-card-square">
                            <div class="flex-center-between">
                                <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                    Profit
                                </h6>

                            </div>
                            <div
                                class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                                <div class="pb-8 shrink-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="card-title">
                                            $<span class="counter-value" data-value=" {{ number_format($user->profit, 2)  }}">0</span>
                                        </div>
                                        <div
                                            class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                viewBox="0 0 6 6" fill="none">
                                                <path
                                                    d="M3.38569 1.43565L5.45455 3.44715L6 2.91683L3 0L0 2.91683L0.545456 3.44715L2.6143 1.43565V6H3.38569V1.43565Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div class="grow self-center pb-3">
                                    <div id="admin-total-revenue-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Enrollments Progress Card -->
                        <div
                            class="col-span-full sm:col-span-6 p-[10px_16px] dk-border-one rounded-xl h-full dk-theme-card-square">
                            <div class="flex-center-between">
                                <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                    Total Deposit
                                </h6>

                            </div>
                            <div
                                class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                                <div class="pb-8 shrink-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="counter-value card-title" data-value=" ${{ number_format($deposits, 2) }}">
                                            0
                                        </div>
                                        <div class="flex-center text-danger size-5 rounded-50 border border-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                viewBox="0 0 6 6" fill="none">
                                                <path
                                                    d="M3.38569 1.43565L5.45455 3.44715L6 2.91683L3 0L0 2.91683L0.545456 3.44715L2.6143 1.43565V6H3.38569V1.43565Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div class="grow self-center pb-3">
                                    <div id="total-enrollment-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Courses Progress Card -->
                        <div
                            class="col-span-full sm:col-span-6 p-[10px_16px] dk-border-one rounded-xl h-full dk-theme-card-square">
                            <div class="flex-center-between">
                                <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                    Total Withdrawal
                                </h6>

                            </div>
                            <div
                                class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                                <div class="pb-8 shrink-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="counter-value card-title" data-value="${{ number_format($withdrawals, 2) }}">
                                            0
                                        </div>
                                        <div
                                            class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                viewBox="0 0 6 6" fill="none">
                                                <path
                                                    d="M3.38569 1.43565L5.45455 3.44715L6 2.91683L3 0L0 2.91683L0.545456 3.44715L2.6143 1.43565V6H3.38569V1.43565Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div class="grow self-center pb-3">
                                    <div id="total-course-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Average rating Progress Card -->
                        {{-- <div
                            class="col-span-full sm:col-span-6 p-[10px_16px] dk-border-one rounded-xl h-full dk-theme-card-square">
                            <div class="flex-center-between">
                                <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                    Total Investment
                                </h6>

                            </div>
                            <div
                                class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                                <div class="pb-8 shrink-0">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="counter-value card-title" data-value="4.5">
                                            0
                                        </div>
                                        <div
                                            class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                                viewBox="0 0 6 6" fill="none">
                                                <path
                                                    d="M3.38569 1.43565L5.45455 3.44715L6 2.91683L3 0L0 2.91683L0.545456 3.44715L2.6143 1.43565V6H3.38569V1.43565Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div class="grow self-center pb-3">
                                    <div id="average-rating-chart"></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- End Short Progress Card -->


                <!-- Start Top Performing Course -->
                <div class="col-span-full 2xl:col-span-4 card">

                    <!-- Course Table -->
                    <div class="overflow-x-auto scrollbar-table">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a
                                    href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener nofollow"
                                    target="_blank"><span class="blue-text">AAPL stock chart</span></a><span
                                    class="trademark"> by TradingView</span></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                {
                                    "allow_symbol_change": true,
                                    "calendar": false,
                                    "details": true,
                                    "hide_side_toolbar": false,
                                    "hide_top_toolbar": false,
                                    "hide_legend": false,
                                    "hide_volume": false,
                                    "hotlist": false,
                                    "interval": "D",
                                    "locale": "en",
                                    "save_image": true,
                                    "style": "1",
                                    "symbol": "NASDAQ:AAPL",
                                    "theme": "light",
                                    "timezone": "Etc/UTC",
                                    "backgroundColor": "#ffffff",
                                    "gridColor": "rgba(46, 46, 46, 0.06)",
                                    "watchlist": [],
                                    "withdateranges": false,
                                    "compareSymbols": [],
                                    "studies": [
                                        "STD;RSI",
                                        "STD;Bollinger_Bands"
                                    ],
                                    "width": 980,
                                    "height": 610
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <!-- End Top Performing Course -->

                <!-- Start Learn Activity Chart -->

            </div>
        </div>
        <!-- End Main Content -->
    </main>

</x-app-layout>
