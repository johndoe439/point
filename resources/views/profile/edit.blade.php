{{-- <x-app-layout>

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
                                    <input type="text" id="firstName" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" class="form-input">
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
                                    <i class="ri-home-line text-inherit"></i>
                                    <div> <b> Home Address : </b> <span
                                            class="text-heading dark:text-dark-text">{{ $user->address ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-flag-line text-inherit"></i>
                                    <div> <b> Country : </b><span
                                            class="text-heading dark:text-dark-text">{{ $user->country ?? 'N/A' }}</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="ri-profile-line text-inherit"></i>
                                    <div> <b> Kyc Status : </b><span
                                            class="text-heading dark:text-dark-text">{{ $user->kyc_status ?? 'N/A' }}</span>
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
                        <h2 class="card-title">Kyc</h2>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="#" method="post">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="lastName" class="form-label">Address</label>
                                    <input type="text" id="lastName" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="poneNumber" class="form-label">Phone No</label>
                                    <input type="tel" id="poneNumber" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="location" class="form-label">Country</label>
                                    <input type="text" id="location" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="location" class="form-label">Document Type</label>
                                    <input type="text" id="location" value="1901 Thornridge" class="form-input">
                                </div>
                                <!-- single item -->
                                <div>
                                    <label class="form-label">Upload Document Id</label>
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
                                <div>
                                    <label class="form-label">Upload Profile Photo</label>
                                    <div
                                        class="file-container file-input-label bg-transparent text-[#727175] h-11 dk-theme-card-square">
                                        <span
                                            class="px-3 rounded-lg rounded-r-none border-r bg-[#EEEEEE] dark:bg-dark-icon border-input-border dark:border-dark-border-four flex-center dk-theme-card-square">
                                            Choose File
                                        </span>
                                        <label for="attatch-support-file-two" class="p-2.5 grow">
                                            <input type="file" id="attatch-support-file-two"
                                                class="hidden file-src">
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

            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h2 class="card-title">Update Password</h2>
                        <h1 class="card-title">Ensure your account is using a long, random password to stay secure.
                        </h1>
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




</x-app-layout> --}}

<x-app-layout>
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition"">
        {{-- keep your existing wrapper classes --}}
        <div class="grid grid-cols-12 gap-x-4">

            {{-- ==== PROFILE INFO ==== --}}
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h2 class="card-title">Update information</h2>
                    </div>

                    <div class="p-3 sm:p-7">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf @method('PATCH')

                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-input"
                                        value="{{ old('name', $user->name) }}" required>
                                    @error('name')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-input"
                                        value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full leading-none">
                                    <label class="form-label">Profile Photo</label>
                                    <div
                                        class="file-container file-input-label bg-transparent text-[#727175] h-11 dk-theme-card-square">
                                        <span
                                            class="px-3 rounded-lg rounded-r-none border-r bg-[#EEEEEE] dark:bg-dark-icon border-input-border dark:border-dark-border-four flex-center dk-theme-card-square">
                                            Choose File
                                        </span>
                                        <label for="profile_image" class="p-2.5 grow">
                                            <input type="file" id="profile_image" name="image"
                                                class="hidden file-src">
                                            <span class="file-name text-sm">
                                                {{ $user->image ? basename($user->image) : 'No file chosen' }}
                                            </span>
                                        </label>
                                    </div>
                                    @error('image')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
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

            {{-- ==== USER SUMMARY CARD ==== --}}
            <div class="col-span-full sm:col-span-6 xl:col-span-4 card p-0">
                <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                    <div class="mt-7 px-6 text-center">
                        <div class="py-5">
                            <div class="flex-center">
                                @if ($user->image)
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="avatar"
                                        class="w-24 h-24 rounded-full object-cover">
                                @else
                                    <img src="{{ asset('dash/images/app/avatar-20.png') }}" alt="avatar"
                                        class="w-24 h-24 rounded-full">
                                @endif

                            </div>
                            <p class="font-spline_sans leading-[1.62] text-heading dark:text-dark-text mt-2.5">
                                {{ $user->name }}
                            </p>
                            <p class="font-spline_sans leading-[1.62] text-heading dark:text-dark-text mt-2.5">
                                {{ $user->email }}
                            </p>
                        </div>

                        <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left">
                            <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">About</h6>
                            <ul
                                class="flex flex-col gap-y-3 *:flex *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4">
                                <li><i class="ri-phone-line"></i> <b>Phone :</b>
                                    <span>{{ $user->phone_number ?? 'N/A' }}</span>
                                </li>
                                <li><i class="ri-home-line"></i> <b>Address :</b>
                                    <span>{{ $user->home_address ?? 'N/A' }}</span>
                                </li>
                                <li><i class="ri-flag-line"></i> <b>Country :</b>
                                    <span>{{ $user->country ?? 'N/A' }}</span>
                                </li>
                                <li><i class="ri-profile-line"></i> <b>KYC :</b>
                                    <span>{{ $user->kyc_status ?? 'N/A' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==== KYC FORM ==== --}}
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h2 class="card-title">KYC</h2>
                    </div>
                    @if ($errors->any())
                        <div class="col-span-full mb-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div class="p-3 sm:p-7">
                        <form method="POST" action="{{ route('profile.kyc.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="home_address" class="form-label">Home Address</label>
                                    <input type="text" id="home_address" name="home_address" class="form-input"
                                        value="{{ old('home_address', $user->home_address) }}">
                                    @error('home_address')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" id="phone_number" name="phone_number" class="form-input"
                                        value="{{ old('phone_number', $user->phone_number) }}">
                                    @error('phone_number')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" id="country" name="country" class="form-input"
                                        value="{{ old('country', $user->country) }}">
                                    @error('country')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="document_type" class="form-label">Document Type</label>
                                    <select id="document_type" name="document_type" class="form-input">
                                        <option value="">-- Select --</option>
                                        <option value="drivers_license"
                                            {{ old('document_type', $user->document_type) === 'drivers_license' ? 'selected' : '' }}>
                                            Driver's License</option>
                                        <option value="government_id"
                                            {{ old('document_type', $user->document_type) === 'government_id' ? 'selected' : '' }}>
                                            Government ID</option>
                                        <option value="passport"
                                            {{ old('document_type', $user->document_type) === 'passport' ? 'selected' : '' }}>
                                            Passport</option>
                                    </select>
                                    @error('document_type')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full leading-none">
                                    <label class="form-label">Upload Document ID</label>
                                    <div
                                        class="file-container file-input-label bg-transparent text-[#727175] h-11 dk-theme-card-square">
                                        <span
                                            class="px-3 rounded-lg rounded-r-none border-r bg-[#EEEEEE] dark:bg-dark-icon border-input-border dark:border-dark-border-four flex-center dk-theme-card-square">
                                            Choose File
                                        </span>
                                        <label for="document_image" class="p-2.5 grow">
                                            <input type="file" id="document_image" name="document_image"
                                                class="hidden file-src">
                                            <span class="file-name text-sm">
                                                {{ $user->document_image ? basename($user->document_image) : 'No file chosen' }}
                                            </span>
                                        </label>
                                    </div>
                                    @error('document_image')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Save KYC</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- ==== PASSWORD UPDATE ==== --}}
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h2 class="card-title">Update Password</h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Ensure your account is using a long, random password to stay secure.
                        </p>
                    </div>

                    <div class="p-3 sm:p-7">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf @method('PUT')

                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" id="current_password" name="current_password"
                                        class="form-input" autocomplete="current-password">
                                    @error('current_password')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" id="password" name="password" class="form-input"
                                        autocomplete="new-password">
                                    @error('password')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-input" autocomplete="new-password">
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
</x-app-layout>
