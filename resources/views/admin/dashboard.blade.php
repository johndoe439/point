<x-app-layout>

    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card p-0 overflow-hidden">
            <div
                class="flex flex-col gap-2 sm:flex-center-between sm:flex-row px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                <div>
                    <h6 class="card-title">All Users</h6>

                </div>

            </div>
            <!-- Start Connected App List -->
            <ul class="py-2.5 *:px-7 *:py-5 divide-y divide-gray-200 dark:divide-dark-border-three">
                <!-- Single App -->
                @foreach ($users as $user)
                    <li
                        class="flex-center-between flex-col sm:flex-row hover:bg-primary-200/50 dark:hover:bg-dark-icon gap-4 sm:gap-[10%]">
                        <a href="{{ route('admin.userDetail', $user) }}">
                            <fieldset></fieldset>
                            <div class="flex flex-col sm:flex-row items-center gap-4">

                                <div class="size-10 shrink-0">
                                    {{-- <img src="/dash/images/app/slack.svg" alt="app-logo"> --}}
                                    <img src="{{ $user?->image ? asset('storage/' . $user->image) : asset('/dash/images/app/avatar-20.png') }}"
                                        alt="User Profile Picture" />
                                </div>
                                <div class="text-center sm:text-left">
                                    <h6 class="leading-none font-semibold text-heading">
                                        Name: {{ $user->name }} <br>
                                        <span class="font-medium text-gray-500 dark:text-dark-text">
                                            <b>Email:</b> {{ $user->email }}</span> <br>
                                        <span class=" font-medium text-gray-500 dark:text-dark-text">
                                            <b>Balance </b> ${{ $user->balance }}</span> <br>
                                        <span class=" font-medium text-gray-500 dark:text-dark-text">
                                            <b>Profit </b> ${{ $user->profit }}</span>
                                    </h6>

                                </div>

                            </div>
                        </a>

                        <button type="button" class="btn b-outline btn-light-outline dk-theme-card-square group/plug">
                            <img src="/dash/images/icons/app-plug.svg" alt="plug"
                                class="group-[:hover]/plug:brightness-200">
                            <span>Delete</span>
                        </button>
                    </li>
                    <!-- Single App -->
                @endforeach
            </ul>
            <!-- End Connected App List -->
        </div>
    </div>
    <!-- End Main Content -->

</x-app-layout>
