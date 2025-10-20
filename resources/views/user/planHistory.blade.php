<x-app-layout>
    <!-- Start Main Content -->
    <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12">
            <!-- INFORMATION TABLE THREE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Plan History</h3> <!-- Updated title to reflect content -->
                    </div>
                    <div class="p-6">
                        <div class="flex-center-between">
                        </div>
                        <div class="overflow-x-auto mt-5">
                            <table class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr class="text-primary-500">
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">No.</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">Amount</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">Start Date</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">End Date</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">Status</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">Profit</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    @if ($planshistories->isNotEmpty())
                                        @foreach ($planshistories as $planshistory)
                                            <tr>
                                                <td class="p-6 py-4">{{ $planshistory->id }}</td>
                                                <td class="p-6 py-4">${{ $planshistory->amount ?? 'N/A' }}</td>
                                                <td class="p-6 py-4">{{ $planshistory->start_date ? $planshistory->start_date->format('Y-m-d H:i') : 'N/A' }}</td>
                                                <td class="p-6 py-4">{{ $planshistory->end_date ? $planshistory->end_date->format('Y-m-d H:i') : 'N/A' }}</td>
                                                <td class="p-6 py-4">
                                                    <span class="badge badge-success-light rounded-full">{{ $planshistory->status ?? 'N/A' }}</span>
                                                </td>
                                                <td class="p-6 py-4">${{ $planshistory->expected_profit ?? 'N/A' }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="p-6 py-4 text-center">No plan history available.</td>
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
