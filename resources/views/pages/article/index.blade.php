<x-layouts.app-layout>
    <x-slot name="title">Articles | {{config('app.name')}}</x-slot>
    @push('breadcrumbs')
    <li class="breadcrumb-item" aria-current="page">Articles</li>
    @endpush
    <x-slot name="page">
        <h2 class="intro-y text-lg font-[600] mt-10 flex flex-col">
            <span>Articles</span>
        </h2>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xl:col-span-12 mt-8">
                <livewire:pages.article.article-data-table />
            </div>
        </div>
    </x-slot>
</x-layouts.app-layout>
