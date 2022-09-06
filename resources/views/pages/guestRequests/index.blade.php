<x-layouts.app-layout>
    <x-slot name="title">Guest Requests | {{config('app.name')}}</x-slot>
    @push('breadcrumbs')
    <li class="breadcrumb-item" aria-current="page">Dashboard</li>
    @endpush
    <x-slot name="page">
        <h2 class="intro-y text-lg font-[600] mt-10 flex flex-col">
            <span>Guest Requests</span>

        </h2>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xl:col-span-12 mt-8">
                <livewire:pages.guest-requests.guest-request-table>
            </div>
        </div>
    </x-slot>
</x-layouts.app-layout>
