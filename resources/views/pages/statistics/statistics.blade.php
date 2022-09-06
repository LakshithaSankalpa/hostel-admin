<x-layouts.app-layout>
    <x-slot name="title">Dashboard | {{config('app.name')}}</x-slot>
    @push('breadcrumbs')
    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
    @endpush
    <x-slot name="page">
        <h2 class="intro-y text-lg font-[600] mt-10 flex flex-col">
            <span>Hello Admin,</span>
            <small class="font-[400]">Here is today ({{ date('M d Y') }}) Statistics report.</small>
        </h2>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xl:col-span-9 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Coming Soon
                    </h2>

                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.app-layout>
