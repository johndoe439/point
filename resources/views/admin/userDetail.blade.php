{{-- <x-app-layout>

    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">

            <!-- Start Student Profile View -->
            <div class="col-span-full sm:col-span-6 xl:col-span-4 card p-0">
                <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                    <div class="relative w-full h-[150px]">
                        <label for="thumbnailsrc"
                            class="file-container bg-[url('../../dash/images/profile/profile.html')] bg-no-repeat bg-cover absolute left-1/2 -translate-x-1/2 -bottom-[calc(theme('spacing.ins-pro-img')_/_2)] w-[calc(theme('spacing.ins-pro-img')_+_5px)] h-[theme('spacing.ins-pro-img')] border-2 border-white dark:border-dark-border-two rounded-20 dk-theme-card-square">
                            <input type="file" id="thumbnailsrc" hidden="" class="img-src peer/file">
                            <span
                                class="absolute bottom-0 right-0 border-2 border-white dark:border-dark-border-two rounded-full dk-theme-card-square">
                                <img src="{{ $user?->image ? asset('storage/' . $user->image) : asset('/dash/images/app/avatar-20.png') }}"
                                    alt="User Profile Picture" />
                            </span>
                        </label>
                    </div>
                    <div class="mt-7 px-6 text-center">
                        <div class="py-5">
                            <div class="flex-center">
                                <h4 class="text-[22px] leading-none text-heading font-semibold relative">
                                    {{ $user->name }}
                                    <img src="/dash/images/icons/verified-icon-green.svg" alt="verified-icon"
                                        class="absolute -top-1.5 -right-3.5 hidden [&.verified]:block unverified">
                                </h4>
                            </div>
                            <p class="font-spline_sans leading-[1.62] text-heading dark:text-dark-text mt-2.5">
                                {{ $user->email }}</p>

                        </div>

                        <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left">
                            <div class="flex-center-between">
                                <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">About</h6>
                                <button class="size-7 hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md"
                                    data-modal-target="addBioModal" data-modal-toggle="addBioModal">
                                    <i class="ri-edit-2-line"></i>
                                </button>
                            </div>
                            <ul
                                class="flex flex-col gap-y-3 *:flex *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4">
                                <li>
                                    <i class="ri-home-2-line text-inherit"></i>
                                    <div> <b>Phone Number : </b> <span
                                            class="text-heading dark:text-dark-text">{{ $user->phone_number ?? 'N/A' }}</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="ri-briefcase-line text-inherit"></i>
                                    <div> <b> Home Address : </b> <span
                                            class="text-heading dark:text-dark-text">{{ $user->home_address ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-flag-line text-inherit"></i>
                                    <div> <b> Country : </b><span
                                            class="text-heading dark:text-dark-text">{{ $user->country ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-image-line text-inherit"></i>
                                    <div> <b> Kyc Image : </b>
                                        <span class="text-heading dark:text-dark-text">
                                            <img src="{{ $user?->document_image ? asset('storage/' . $user->document_image) : asset('/dash/images/app/avatar-20.png') }}"
                                                alt="User Profile Picture" />
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Student Profile View -->

            <!-- Start Account Setting Form -->
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h6 class="card-title">User Profit : <b>${{ $user->profit }}</b></h6>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="{{ route('admin.update_profit', $user->id) }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="firstName" class="form-label">Update profit</label>
                                    <input id="firstName" type="number" step="0.01" name="profit"
                                        value="{{ $user->profit }}" class="form-input">
                                </div>


                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Update Profit</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h6 class="card-title">User Balance : <b>${{ $user->balance }}</b></h6>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="{{ route('admin.update_balance', $user->id) }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="firstName" class="form-label">Update Balance</label>
                                    <input id="firstName" type="number" step="0.01" name="balance"
                                        value="{{ $user->balance }}" class="form-input">
                                </div>


                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Update Balance</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Account Setting Form -->

        </div>
    </div>
    <!-- End Main Content -->

</x-app-layout> --}}

<x-app-layout>

    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">

            <!-- Start Student Profile View -->
            <div class="col-span-full sm:col-span-6 xl:col-span-4 card p-0">
                <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                    <div class="relative w-full h-[150px]">
                        <label for="thumbnailsrc"
                            class="file-container bg-[url('../../dash/images/profile/profile.html')] bg-no-repeat bg-cover absolute left-1/2 -translate-x-1/2 -bottom-[calc(theme('spacing.ins-pro-img')_/_2)] w-[calc(theme('spacing.ins-pro-img')_+_5px)] h-[theme('spacing.ins-pro-img')] border-2 border-white dark:border-dark-border-two rounded-20 dk-theme-card-square">
                            <input type="file" id="thumbnailsrc" hidden="" class="img-src peer/file">
                            <span
                                class="absolute bottom-0 right-0 border-2 border-white dark:border-dark-border-two rounded-full dk-theme-card-square">
                                <img src="{{ $user?->image ? asset('storage/' . $user->image) : asset('/dash/images/app/avatar-20.png') }}"
                                    alt="User Profile Picture" />
                            </span>
                        </label>
                    </div>
                    <div class="mt-7 px-6 text-center">
                        <div class="py-5">
                            <div class="flex-center">
                                <h4 class="text-[22px] leading-none text-heading font-semibold relative">
                                    {{ $user->name }}
                                    <img src="/dash/images/icons/verified-icon-green.svg" alt="verified-icon"
                                        class="absolute -top-1.5 -right-3.5 hidden [&.verified]:block unverified">
                                </h4>
                            </div>
                            <p class="font-spline_sans leading-[1.62] text-heading dark:text-dark-text mt-2.5">
                                {{ $user->email }}</p>
                        </div>

                        <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left">
                            <div class="flex-center-between">
                                <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">About</h6>
                                <button class="size-7 hover:bg-gray-200 dark:hover:bg-dark-icon rounded-md"
                                    data-modal-target="addBioModal" data-modal-toggle="addBioModal">
                                    <i class="ri-edit-2-line"></i>
                                </button>
                            </div>
                            <ul
                                class="flex flex-col gap-y-3 *:flex *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4">
                                <li>
                                    <i class="ri-home-2-line text-inherit"></i>
                                    <div> <b>Phone Number : </b> <span
                                            class="text-heading dark:text-dark-text">{{ $user->phone_number ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-briefcase-line text-inherit"></i>
                                    <div> <b> Home Address : </b> <span
                                            class="text-heading dark:text-dark-text">{{ $user->home_address ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-flag-line text-inherit"></i>
                                    <div> <b> Country : </b><span
                                            class="text-heading dark:text-dark-text">{{ $user->country ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-flag-line text-inherit"></i>
                                    <div> <b> Kyc Status : </b><span
                                            class="text-heading dark:text-dark-text">{{ $user->kyc_status ?? 'N/A' }}</span>
                                    </div>
                                </li>

                                <!-- Enhanced KYC Section (with Save & Status Update) -->
                                <li>
                                    <i class="ri-image-line text-inherit"></i>
                                    <div class="w-full">
                                        <b>KYC Document:</b>

                                        <div class="mt-3 flex flex-col gap-3">
                                            <!-- Clickable Image (opens in SweetAlert) -->
                                            <a href="{{ $user?->document_image ? asset('storage/'.$user->document_image) : asset('/dash/images/app/avatar-20.png') }}"
                                               class="kyc-image-link inline-block">
                                                <img src="{{ $user?->document_image ? asset('storage/'.$user->document_image) : asset('/dash/images/app/avatar-20.png') }}"
                                                     alt="KYC Document"
                                                     class="w-32 h-32 object-cover rounded-lg border border-gray-300 dark:border-dark-border shadow-sm hover:shadow-md transition">
                                            </a>

                                

                                            <!-- Current KYC Status Badge -->
                                            <div class="mt-1">
                                                <span class="inline-flex items-center gap-1 text-xs font-medium">
                                                    Current:
                                                    @switch($user->kyc_status)
                                                        @case('verified')
                                                            <span class="px-2 py-0.5 rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                                                Verified
                                                            </span>
                                                            @break
                                                        @case('rejected')
                                                            <span class="px-2 py-0.5 rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
                                                                Rejected
                                                            </span>
                                                            @break
                                                        @default
                                                            <span class="px-2 py-0.5 rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                                                Pending
                                                            </span>
                                                    @endswitch
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Student Profile View -->

            <!-- Start Account Setting Forms (Profit, Balance, KYC Admin Panel) -->
            <div class="col-span-full sm:col-span-6 xl:col-span-8 space-y-6">

                <!-- User Profit -->
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h6 class="card-title">User Profit: <b>${{ number_format($user->profit, 2) }}</b></h6>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="{{ route('admin.update_profit', $user->id) }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-y-5">
                                <div class="leading-none">
                                    <label for="profit" class="form-label">Update Profit</label>
                                    <input id="profit" type="number" step="0.01" name="profit"
                                           value="{{ $user->profit }}" class="form-input" required>
                                </div>
                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Update Profit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- User Balance -->
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h6 class="card-title">User Balance: <b>${{ number_format($user->balance, 2) }}</b></h6>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="{{ route('admin.update_balance', $user->id) }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-y-5">
                                <div class="leading-none">
                                    <label for="balance" class="form-label">Update Balance</label>
                                    <input id="balance" type="number" step="0.01" name="balance"
                                           value="{{ $user->balance }}" class="form-input" required>
                                </div>
                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Update Balance</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- KYC Admin Panel (Full View) -->
                @if(auth()->user()->role === 'admin')
                    <div class="card p-0 overflow-hidden">
                        <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                            <h6 class="card-title">KYC Management</h6>
                        </div>
                        <div class="p-3 sm:p-7">
                            <div class="space-y-5">
                                <!-- Current Document -->
                                <div>
                                    <label class="form-label">Uploaded KYC Document</label>
                                    <a href="{{ $user?->document_image ? asset('storage/'.$user->document_image) : asset('/dash/images/app/avatar-20.png') }}"
                                       class="kyc-image-link block">
                                        <img src="{{ $user?->document_image ? asset('storage/'.$user->document_image) : asset('/dash/images/app/avatar-20.png') }}"
                                             alt="KYC Document"
                                             class="w-full max-w-md h-64 object-cover rounded-lg border border-gray-300 dark:border-dark-border shadow-sm hover:shadow-lg transition">
                                    </a>
                                </div>

                                <!-- KYC Status Update -->
                                <form action="{{ route('admin.update_kyc', $user->id) }}" method="POST">
                                    @csrf @method('PATCH')

                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-end">
                                        <div class="sm:col-span-2">
                                            <label class="form-label">Update KYC Status</label>
                                            <select name="kyc_status" required
                                                    class="form-select rounded-md border-gray-300 dark:border-dark-border focus:ring-primary focus:border-primary">
                                                <option value="pending"   {{ $user->kyc_status === 'pending'   ? 'selected' : '' }}>Pending</option>
                                                <option value="verified"  {{ $user->kyc_status === 'verified'  ? 'selected' : '' }}>Verified</option>
                                                <option value="rejected"  {{ $user->kyc_status === 'rejected'  ? 'selected' : '' }}>Rejected</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="submit"
                                                    class="btn b-solid btn-primary-solid w-full flex items-center justify-center gap-1">
                                                <i class="ri-save-line"></i> Save Status
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <!-- Current Status Badge -->
                                <div>
                                    <span class="text-sm font-medium text-gray-600 dark:text-dark-text">Current Status:</span>
                                    @switch($user->kyc_status)
                                        @case('verified')
                                            <span class="ml-2 px-3 py-1 rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 font-medium">
                                                Verified
                                            </span>
                                            @break
                                        @case('rejected')
                                            <span class="ml-2 px-3 py-1 rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200 font-medium">
                                                Rejected
                                            </span>
                                            @break
                                        @default
                                            <span class="ml-2 px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 font-medium">
                                                Pending
                                            </span>
                                    @endswitch
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <!-- End Account Setting Forms -->

        </div>
    </div>
    <!-- End Main Content -->

</x-app-layout>



