<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12">
            <!-- INFORMATION TABLE THREE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">All Users Deposit History</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex-center-between">
                        </div>
                        @if (session('success'))
                            <div class="mb-4 text-green-600">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="overflow-x-auto mt-5">
                            <table
                                class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr class="text-primary-500">
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            No.</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Transaction id</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Name</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Amount</th>

                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Date</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Status</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    @if ($deposits->isNotEmpty())
                                        @foreach ($deposits as $deposit)
                                            <tr>
                                                <td class="p-6 py-4">{{ $deposit->id }}</td>
                                                <td class="p-6 py-4">{{ $deposit->transaction_id }}</td>
                                                <td class="p-6 py-4">{{ $deposit->user->name }}</td>
                                                <td class="p-6 py-4">${{ $deposit->amount ?? 'N/A' }}</td>

                                                <td class="p-6 py-4">{{ $deposit->created_at->format('Y-m-d H:i') }}
                                                </td>
                                                <td class="p-6 py-4">
                                                    <form action="{{ route('admin.deposit-status', $deposit->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="status" onchange="this.form.submit()"
                                                            class="border rounded p-1">
                                                            <option value="pending"
                                                                {{ $deposit->status == 'pending' ? 'selected' : '' }}>
                                                                Pending</option>
                                                            <option value="approved"
                                                                {{ $deposit->status == 'approved' ? 'selected' : '' }}>
                                                                Approved</option>
                                                            <option value="rejected"
                                                                {{ $deposit->status == 'rejected' ? 'selected' : '' }}>
                                                                Rejected</option>
                                                        </select>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="p-6 py-4 text-center">No deposit history
                                                available.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout>
