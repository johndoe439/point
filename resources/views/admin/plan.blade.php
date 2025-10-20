 <x-app-layout>
        <main>
            <!-- Start Main Content -->
            <div
                class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
                <div class="card p-0 overflow-hidden">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <div>
                            <h6 class="card-title">Your Investment Plans </h6>
                            <p class="card-description">List of all Investment Plans.</p>
                        </div>
                        <button type="button" data-modal-target="addAddressModal" data-modal-toggle="addAddressModal"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">Add Address</span>
                        </button>
                    </div>
                    <!-- Start Login Device Table -->
                    <div class="overflow-x-auto scrollbar-table">
                        <table
                            class="table-auto w-full whitespace-nowrap text-left text-gray-900 dark:text-dark-text font-medium leading-none">
                            <thead
                                class="border-b-[0.5px] border-gray-200 dark:border-dark-border text-gray-500 dark:text-dark-text font-semibold">
                                <tr>
                                    <th class="px-7 py-6">Plan Name</th>
                                    <th class="px-7 py-6">Min Amount</th>
                                    <th class="px-7 py-6">Max Amount</th>
                                    <th class="px-7 py-6">Percentage</th>
                                    <th class="px-7 py-6">Duration</th>

                                    <th class="px-7 py-6">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                @foreach ($plans as $plan)
                                    <tr
                                        class="hover:bg-primary-200/50 dark:hover:bg-dark-icon hover:text-gray-500 dark:hover:text-dark-text group/tr">
                                        <td class="px-7 py-6">{{ $plan->name }}</td>
                                        <td class="px-7 py-6">{{ $plan->min_amount }}</td>
                                        <td class="px-7 py-6">{{ $plan->max_amount }}</td>
                                        <td class="px-7 py-6">{{ $plan->profit_percentage }}</td>
                                        <td class="px-7 py-6">{{ $plan->duration }}</td>

                                        <td class="px-7 py-6">
                                            <button type="button" data-modal-target="deleteDevice"
                                                data-modal-toggle="deleteDevice"
                                                class="size-7 rounded-50 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon focus:bg-gray-200 dark:focus:bg-dark-icon">
                                                <i
                                                    class="ri-delete-bin-6-line text-[16px] text-gray-500 dark:text-dark-text"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Login Device Table -->
                </div>
            </div>
            <!-- End Main Content -->

            <!-- Start Add Address Modal -->
            <div id="addAddressModal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-modal w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white dark:bg-dark-card-shade rounded-lg shadow">
                        <button type="button" data-modal-hide="addAddressModal"
                            class="absolute top-3 end-2.5 hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg size-8 flex-center">
                            <i class="ri-close-line text-gray-500 dark:text-dark-text text-xl leading-none"></i>
                        </button>
                        <div class="p-4 md:p-5">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text mb-4"><b>Carefully Add your
                                Plan</b></h3>
                            <form action="{{ route('admin.plan.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="full_name" class="form-label">Plan Name</label>
                                    <input type="text" id="full_name" class="form-input w-full" name="name"
                                        placeholder="Bronze" autocomplete="off" required>
                                </div>
                                @error('name')
                                    <span class="text-xs text-error">{{ $message }}</span>
                                @enderror
                                <div>
                                    <label for="address-1" class="form-label">Min Amount</label>
                                    <input type="text" id="address-1" class="form-input w-full" name="min_amount"
                                        placeholder="500" autocomplete="off" required>
                                </div>
                                @error('min_amount')
                                    <span class="text-xs text-error">{{ $message }}</span>
                                @enderror
                                <div>
                                    <label for="email-5" class="form-label">Max Amount</label>
                                    <input type="text" name="max_amount" id="email-5" class="form-input w-full"
                                        placeholder="2000" autocomplete="off" required>
                                </div>
                                @error('max_amount')
                                    <span class="text-xs text-error">{{ $message }}</span>
                                @enderror
                                <div>
                                    <label for="email-5" class="form-label">Percentage</label>
                                    <input type="text" name="profit_percentage" id="email-5" class="form-input w-full"
                                        placeholder="20" autocomplete="off" required>
                                </div>
                                @error('profit_percentage')
                                    <span class="text-xs text-error">{{ $message }}</span>
                                @enderror
                                <div>
                                    <label for="email-5" class="form-label">Duration in Days (e.g  6 )</label>
                                    <input type="text" name="duration" id="email-5" class="form-input w-full"
                                        placeholder="7" autocomplete="off" required>
                                </div>
                                @error('duration')
                                    <span class="text-xs text-error">{{ $message }}</span>
                                @enderror

                                <div class="flex justify-end gap-2">
                                    <button type="submit"
                                        class="btn b-solid btn-primary-solid btn-sm dk-theme-card-square">Add
                                       Plan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Add Address Modal -->

            <!-- Start Delete Device Modal -->
            <div id="deleteDevice" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-modal w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white dark:bg-dark-card-shade rounded-lg shadow">
                        <button type="button" data-modal-hide="deleteDevice"
                            class="absolute top-3 end-2.5 hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg size-8 flex-center">
                            <i class="ri-close-line text-gray-500 dark:text-dark-text text-xl leading-none"></i>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <img src="/dash/images/icons/delete-record.png" alt="delete" class="block h-12 mx-auto" />
                            <div class="mt-5 text-center">
                                <h5 class="mb-1">Are you sure?</h5>
                                <p class="text-gray-500 dark:text-dark-text">Are you certain you want to Cancel</p>
                                <div class="flex justify-center gap-2 mt-6">
                                    <button type="reset" data-modal-hide="deleteDevice"
                                        class="btn b-light btn-danger-light btn-sm">Cancel</button>



                                    <form action="{{ route('admin.plan.delete', $plan->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-modal-hide="deleteDevice"
                                            class="btn b-solid btn-danger-solid btn-sm">Yes, Delete It!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Delete Device Modal -->
        </main>
    </x-app-layout>


