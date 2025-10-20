<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">

        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Course Information -->
            <div class="col-span-full lg:col-span-7 card">
                <div class="p-1.5">
                    <h6 class="card-title">New Deposit</h6> <br>
                    <label for="courseTitle" class="form-label">Copy Wallet address, token name and network </label>

                    <div class="mt-7 pt-0.5">
                        @foreach ($addresses as $index => $address)
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle_{{ $index }}" class="form-label">Token
                                        name</label>
                                    <input type="text" id="courseTitle_{{ $index }}"
                                        value="{{ $address->name }}" class="form-input" readonly />
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="network_{{ $index }}" class="form-label">Token
                                        Network</label>
                                    <input type="text" id="network_{{ $index }}"
                                        value="{{ $address->network }}" class="form-input" readonly />
                                </div>

                                <div class="col-span-full leading-none relative">
                                    <label for="address_{{ $index }}" class="form-label">Address</label>
                                    <div class="relative">
                                        <input type="text" id="address_{{ $index }}"
                                            value="{{ $address->address }}" class="form-input pr-10" readonly />
                                        <button type="button" id="copyButton_{{ $index }}"
                                            onclick="copyAddress('address_{{ $index }}')"
                                            class="absolute inset-y-0 right-0 top-4 flex items-center pr-3 text-primary-500 hover:text-primary-600 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-copy">
                                                <rect x="9" y="9" width="13" height="13" rx="2"
                                                    ry="2"></rect>
                                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div> <br>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Course Information -->

            <!-- Start Course Media File -->


            <div class="col-span-full lg:col-span-5 card">
                @if ($errors->any())
                    <div class="col-span-full mb-4">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ route('user.deposits') }}" method="POST" enctype="multipart/form-data"> @csrf

                    <div class="p-1.5">
                        <h6 class="card-title">Securely deposit your crypto asset</h6> <br>
                        <label for="courseTitle" class="form-label">Upload proof of payment </label>

                        <div class="mt-7 pt-0.5 flex flex-col gap-5">
                            <div class="col-span-full xl:col-auto leading-none">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="text" id="amount" name="amount" placeholder="Input Amount" class="form-input"
                                    required />
                            </div>
                            <div class="col-span-full sm:col-span-4">
                                <p class="text-xs text-gray-500 dark:text-dark-text leading-none font-semibold mb-3">
                                    Proof of Payment
                                </p>
                                <label for="intro-file-src"
                                    class="file-container text-xs leading-none font-semibold mb-3 cursor-pointer aspect-[4/1.5] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border rounded-10 dk-theme-card-square">
                                    <input type="file" name="image" id="intro-file-src" hidden
                                        class="peer/file file-src" />
                                    <span class="flex-center flex-col">
                                        <span
                                            class="size-10 md:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50 dk-theme-card-square">
                                            <img src="/dash/images/icons/upload-file.svg" alt="icon"
                                                class="dark:brightness-200 dark:contrast-100 w-1/2 sm:w-auto" />
                                        </span>
                                        <span class="file-name text-gray-500 dark:text-dark-text mt-2">Choose
                                            file</span>
                                    </span>
                                </label>
                            </div>
                            <div class="flex-center !justify-end">
                                <button type="submit"
                                    class="btn b-solid btn-primary-solid btn-lg dk-theme-card-square">
                                    Deposit!
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- End Course Media File -->
        </div>

    </div>

    <!-- End Main Content -->

    <!-- Inline Script for Silent Copy (no dialogue, changes button icon briefly for feedback) -->
    <script>
        function copyAddress(inputId) {
            const addressInput = document.getElementById(inputId);
            addressInput.select();
            addressInput.setSelectionRange(0, 99999); // For mobile

            navigator.clipboard.writeText(addressInput.value).then(() => {
                // Silent success: Change icon to checkmark for 2 seconds (visual feedback without dialogue)
                const button = document.getElementById('copyButton_' + inputId.split('_')[1]);
                const originalSVG = button.innerHTML;
                button.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                `;
                setTimeout(() => {
                    button.innerHTML = originalSVG;
                }, 2000);
            }).catch(err => {
                console.error('Copy failed:', err);
                // Silent failure: Optional - change to X icon briefly
            });
        }
    </script>
</x-app-layout>
