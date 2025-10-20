<x-app-layout>

    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Account Setting Form -->
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h2 class="card-title">Update information</h2>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="#" method="post">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="firstName" class="form-label">Name</label>
                                    <input type="text" id="firstName"  class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email"
                                        class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="lastName" class="form-label">Address</label>
                                    <input type="text" id="lastName"  class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="poneNumber" class="form-label">Phone No</label>
                                    <input type="tel" id="poneNumber"  class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="location" class="form-label">Country</label>
                                    <input type="text" id="location"  class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="location" class="form-label">Document Type</label>
                                    <input type="text" id="location" value="1901 Thornridge" class="form-input">
                                </div>
                                <!-- single item -->
                                <div>
                                    <label class="form-label">Upload document</label>
                                    <div
                                        class="file-container file-input-label bg-transparent text-[#727175] h-11 dk-theme-card-square">
                                        <span
                                            class="px-3 rounded-lg rounded-r-none border-r bg-[#EEEEEE] dark:bg-dark-icon border-input-border dark:border-dark-border-four flex-center dk-theme-card-square">
                                            Choose File
                                        </span>
                                        <label for="attatch-support-file-two" class="p-2.5 grow">
                                            <input type="file" id="attatch-support-file-two" class="hidden file-src">
                                            <span class="file-name text-sm">No file choose</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Save Changes</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- End Account Setting Form -->


            <div class="col-span-full sm:col-span-6 xl:col-span-4 card p-0">
                <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">

                    <div class="mt-7 px-6 text-center">
                        <div class="py-5">
                            <div class="flex-center">
                                <h4 class="text-[22px] leading-none text-heading font-semibold relative">

                                    <img src="{{ $user?->image ? asset('storage/' . $user->image) : asset('/dash/images/app/avatar-20.png') }}"
                                        alt="User Profile Picture"
                                        class="absolute -top-1.5 -right-3.5  [&.verified]:block unverified" /> <br> <br>
                                    {{ Auth::user()->name }}

                                </h4>
                            </div>
                            <p class="font-spline_sans leading-[1.62] text-heading dark:text-dark-text mt-2.5">
                                {{ Auth::user()->email }}</p>

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
                                            class="text-heading dark:text-dark-text">{{ $user->phone ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-briefcase-line text-inherit"></i>
                                    <div> <b> Home Address : </b> <span
                                            class="text-heading dark:text-dark-text">{{ $user->address ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-briefcase-line text-inherit"></i>
                                    <div> <b> Country : </b><span
                                            class="text-heading dark:text-dark-text">{{ $user->country ?? 'N/A' }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h2 class="card-title">Update Password</h2>
                        <h1 class="card-title">Ensure your account is using a long, random password to stay secure.</h1>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="#" method="post">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="firstName" class="form-label">Current Password</label>
                                    <input type="password" id="firstName" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="email" class="form-label">New Password</label>
                                    <input type="password" id="email" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="lastName" class="form-label">Confirm Password</label>
                                    <input type="password" id="lastName" class="form-input">
                                </div>


                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Save Changes</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->


    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
