<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- INFO FORM -->
            <div class="col-span-full">
                <div class="card p-5">
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
                    @if (session('success'))
                        <div class="col-span-full mb-4">
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span>{{ session('success') }}</span>
                                <p>Please deposit 30% of your withdrawal amount to proceed.</p>
                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="col-span-full mb-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Error!</strong>
                                <span>{{ session('error') }}</span>
                            </div>
                        </div>
                    @endif
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Withdraw Funds</h3>
                    </div>
                    <br>
                    <form action="{{ route('user.withdrawal') }}" method="POST">
                        @csrf
                        <div class="flex lg:flex-row flex-col gap-x-4">
                            <div class="w-full mb-4">
                                <label for="full_name" class="form-label"> Amount </label>
                                <input type="text" name="amount" id="full_name" class="form-input" placeholder="39"
                                    autocomplete="off" required>
                            </div>
                            <div class="w-full mb-4">
                                <label for="address-1" class="form-label">Token Name</label>
                                <input type="text" name="crypto_name" id="address-1" class="form-input"
                                    placeholder="btc">
                            </div>
                        </div>
                        <div class="flex lg:flex-row flex-col gap-x-4">
                            <div class="w-full mb-4">
                                <label for="email-5" class="form-label">Network</label>
                                <input type="text" name="network" id="email-5" class="form-input"
                                    placeholder="trc20" autocomplete="off" required>
                            </div>
                            <div class="w-full mb-4">
                                <label for="password-5" class="form-label">Crypto Address</label>
                                <input type="text" name="crypto_address" id="password-5" class="form-input"
                                    placeholder="34565fvgfvwe34rtev" autocomplete="off" required>
                            </div>
                        </div>
                        <button  class="btn b-solid btn-primary-solid px-5 dk-theme-card-square">Withdraw
                            Funds</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout>
