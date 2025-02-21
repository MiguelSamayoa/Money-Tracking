<div class="bg-gray-100 min-h-full flex flex-col justify-center items-center px-6 py-20">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{__('welcome_view.Header_1')}}</h1>
        <p class="text-lg text-gray-600 mb-6"> {{ __('welcome_view.text_1') }} </p>
    </div>

    <div class="w-full max-w-5xl  bg-white p-6 rounded-lg shadow-lg">
        <div wire:ignore class="h-60">
            <livewire:livewire-line-chart  :line-chart-model="$lineChartModel"  />
        </div>
    </div>

    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mt-20 mb-4"> {{ __('welcome_view.Header_2') }} </h1>
        <p class="text-lg text-gray-600 mb-6"> {{ __('welcome_view.text_2') }} </p>
    </div>

    <div class="w-full max-w-5xl flex justify-stretch bg-white p-6 rounded-lg shadow-lg">
        <div wire:ignore class="h-80 w-7/12 bg-slate-100">
            <livewire:livewire-pie-chart  :pie-chart-model="$expenseRecordPieChartModel"  />
        </div>

        <div wire:ignore class="h-80 w-7/12">
            <livewire:livewire-line-chart
            :line-chart-model="$incomesRecordAreaChartModel"/>
        </div>
    </div>

    <div class="mt-20">
        <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-12 py-6 text-2xl rounded-lg shadow-md hover:bg-indigo-700">¡Empieza Gratis Ahora!</a>
    </div>
</div>

