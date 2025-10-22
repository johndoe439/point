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
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Withdraw Funds</h3>

                    </div> <br>

                    <form action="{{ route('user.withdraws') }}" method="POST">
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

                        <button type="submit" class="btn b-solid btn-primary-solid px-5 dk-theme-card-square">Withdraw
                            Funds</button>
                    </form>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;form class="p-6">
                                    &lt;div class="flex lg:flex-row flex-col gap-x-4">
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="full_name" class="form-label">Full
                                                Name&lt;/label>
                                            &lt;input type="text" id="full_name" class="form-input" placeholder="Martina Hernandezc"
                                                autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="address-1"
                                                class="form-label">Address&lt;/label>
                                            &lt;input type="text" id="address-1" class="form-input" >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex lg:flex-row flex-col gap-x-4">
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="email-5"
                                                class="form-label">Email&lt;/label>
                                            &lt;input type="email" id="email-5" class="form-input"
                                                placeholder="<a href="https://template.codexshaper.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="325f5340465b5c535a57405c535c5657485172555f535b5e1c515d5f">[email&#160;protected]</a>" autocomplete="off" required >
                                        &lt;/div>
                                        &lt;div class="w-full mb-4">
                                            &lt;label for="password-5"
                                                class="form-label">Password&lt;/label>
                                            &lt;input type="password" id="password-5" class="form-input" placeholder="**********"
                                                autocomplete="off" required >
                                        &lt;/div>
                                    &lt;/div>
                                    &lt;div class="flex items-center gap-2 select-none mb-6">
                                        &lt;input type="checkbox" checked
                                            class="check check-primary-solid size-4 before:text-sm before:leading-none">
                                        &lt;label class="leading-none font-medium text-gray-500 dark:text-dark-text text-sm">Check
                                            Out&lt;/label>
                                    &lt;/div>
                                    &lt;button type="submit"
                                        class="btn b-solid btn-primary-solid px-5 dk-theme-card-square">Continue&lt;/button>
                                &lt;/form>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>

        </div>
    </div>
    <!-- End Main Content -->


    <style>
        .alert {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            /* Ensure it appears above the sidebar */
            min-width: 300px;
            max-width: 400px;
            margin: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

   



</x-app-layout>
