<x-app-layout>
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card p-0 overflow-hidden">
            <div
                class="flex flex-col gap-2 sm:flex-center-between sm:flex-row px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                <h6 class="card-title">Investment Plans</h6>
            </div>
            <div class="p-7 xl:p-15">
                @if (session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error mb-4">
                        {{ session('error') }}
                    </div>
                @endif
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
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($plans as $plan)
                        <div class="col-span-1 dk-border-one p-5 xl:p-10 rounded-20 h-max hover:border-primary-500 group/pc dk-theme-card-square ac-transition"
                            data-plan-id="{{ $plan->id }}" data-min-amount="{{ $plan->min_amount ?? 0 }}"
                            data-max-amount="{{ $plan->max_amount ?? 0 }}"
                            data-profit-percentage="{{ $plan->profit_percentage ?? 0 }}"
                            data-duration="{{ $plan->duration ?? 0 }}">
                            <form action="{{ route('user.invests') }}" method="POST">
                                @csrf
                                <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                <div
                                    class="sm:text-lg !leading-none text-primary-500 dark:text-dark-text font-semibold bg-primary-200 dark:bg-dark-icon px-5 py-1.5 rounded-full w-max mb-5 dk-theme-card-square">
                                    {{ $plan->name ?? 'N/A' }}
                                </div>
                                <div
                                    class="text-[42px] leading-none text-heading dark:text-dark-text font-extrabold mt-3 mb-8">
                                    {{ number_format($plan->profit_percentage ?? 0, 2) }} %
                                </div>
                                <h3 class="sm:text-lg !leading-none text-heading font-semibold">Min Amount:
                                    ${{ number_format($plan->min_amount ?? 0, 2) }}</h3>
                                <h3 class="sm:text-lg !leading-none text-heading font-semibold">Max Amount:
                                    ${{ number_format($plan->max_amount ?? 0, 2) }}</h3>
                                <h3 class="sm:text-lg !leading-none text-heading font-semibold">Duration:
                                    {{ $plan->duration ?? 0 }} Days</h3>
                                <div class="mt-4 space-y-4">
                                    <label class="block">
                                        <input
                                            class="form-input w-full rounded-lg bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            placeholder="Enter Amount" type="number" name="amount"
                                            id="amount-{{ $plan->id }}" min="0" step="0.01" required>
                                        @error('amount')
                                            <span class="text-xs text-error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <p class="error-message text-red-500 text-sm hidden"
                                        id="error-{{ $plan->id }}">
                                        Amount must be between ${{ number_format($plan->min_amount ?? 0, 2) }} and
                                        ${{ number_format($plan->max_amount ?? 0, 2) }}.
                                    </p>
                                    <label class="block">
                                        <input
                                            class="form-input w-full rounded-lg bg-transparent px-3 py-2 placeholder:text-slate-400/70 disabled:pointer-events-none disabled:select-none disabled:bg-zinc-100 dark:disabled:bg-navy-600"
                                            placeholder="Expected Profit" type="text" name="expected_profit"
                                            id="profit-{{ $plan->id }}" readonly>
                                    </label>
                                    <label class="block">
                                        <input
                                            class="form-input w-full rounded-lg bg-transparent px-3 py-2 placeholder:text-slate-400/70 disabled:pointer-events-none disabled:select-none disabled:bg-zinc-100 dark:disabled:bg-navy-600"
                                            placeholder="Start Date" type="text" name="start_date"
                                            id="start-{{ $plan->id }}" readonly required>
                                    </label>
                                    <label class="block">
                                        <input
                                            class="form-input w-full rounded-lg bg-transparent px-3 py-2 placeholder:text-slate-400/70 disabled:pointer-events-none disabled:select-none disabled:bg-zinc-100 dark:disabled:bg-navy-600"
                                            placeholder="End Date" type="text" name="end_date"
                                            id="end-{{ $plan->id }}" readonly required>
                                    </label>
                                </div>
                                <button
                                    class="dk-border-one text-heading dark:text-dark-text flex-center w-full py-3.5 rounded-full hover:!bg-primary-500 group-hover/pc:text-white group-hover/pc:bg-primary-400 group-hover/pc:translate-y-[44px] xl:group-hover/pc:translate-y-[64px] dk-theme-card-square ac-transition mt-4"
                                    type="submit">
                                    Choose Plan
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('[data-plan-id]').forEach(container => {
                    const id = container.dataset.planId;
                    const amountInput = document.getElementById(`amount-${id}`);
                    const error = document.getElementById(`error-${id}`);
                    const profitInput = document.getElementById(`profit-${id}`);
                    const startInput = document.getElementById(`start-${id}`);
                    const endInput = document.getElementById(`end-${id}`);

                    if (!amountInput || !profitInput || !startInput || !endInput || !error) {
                        console.error(`Missing elements for plan ${id}`);
                        return;
                    }

                    // Function to format date as YYYY-MM-DD
                    const formatDate = (date) => {
                        return date.toISOString().split('T')[0];
                    };

                    // Function to calculate and update fields
                    const updateFields = () => {
                        const min = parseFloat(container.dataset.minAmount) || 0;
                        const max = parseFloat(container.dataset.maxAmount) || 0;
                        const percent = parseFloat(container.dataset.profitPercentage) || 0;
                        const duration = parseInt(container.dataset.duration) || 0;
                        const value = parseFloat(amountInput.value) || 0;

                        // Clear fields for invalid or empty input
                        if (!amountInput.value || value <= 0 || isNaN(value)) {
                            profitInput.value = '';
                            startInput.value = '';
                            endInput.value = '';
                            error.classList.add('hidden');
                            return;
                        }

                        // Validate amount
                        if (value >= min && value <= max) {
                            // Calculate expected profit (simple percentage)
                            const profit = ((value * percent) / 100).toFixed(2);
                            profitInput.value = `$${profit}`;

                            // Calculate dates
                            const today = new Date();
                            startInput.value = formatDate(today);
                            const endDate = new Date(today);
                            endDate.setDate(today.getDate() + duration);
                            endInput.value = formatDate(endDate);

                            error.classList.add('hidden');
                        } else {
                            profitInput.value = '';
                            startInput.value = '';
                            endInput.value = '';
                            error.classList.remove('hidden');
                            error.textContent =
                                `Amount must be between $${min.toFixed(2)} and $${max.toFixed(2)}.`;
                        }
                    };

                    // Debounce function to limit rapid input events
                    const debounce = (func, wait) => {
                        let timeout;
                        return (...args) => {
                            clearTimeout(timeout);
                            timeout = setTimeout(() => func.apply(this, args), wait);
                        };
                    };

                    // Attach debounced input event listener
                    amountInput.addEventListener('input', debounce(updateFields, 300));

                    // Validate on form submission
                    const form = container.querySelector('form');
                    form.addEventListener('submit', (e) => {
                        const min = parseFloat(container.dataset.minAmount) || 0;
                        const max = parseFloat(container.dataset.maxAmount) || 0;
                        const value = parseFloat(amountInput.value) || 0;

                        if (value < min || value > max || isNaN(value) || value <= 0) {
                            e.preventDefault();
                            error.classList.remove('hidden');
                            error.textContent =
                                `Please enter a valid amount between $${min.toFixed(2)} and $${max.toFixed(2)}.`;
                            amountInput.focus();
                        }
                    });
                });
            });
        </script>
    @endpush
</x-app-layout>
