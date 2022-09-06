<x-layouts.app-layout>
    <x-slot name="title">Article Edit | {{config('app.name')}}</x-slot>
    @push('breadcrumbs')
    <li class="breadcrumb-item" aria-current="page">Article </li>
    @endpush
    <x-slot name="page">
        {{--  <h2 class="intro-y text-lg font-[600] mt-8 flex flex-col">
            <span>Article </span>
        </h2>  --}}
        <div class="mt-2">
            <livewire:pages.article.update-article-form :article='$article' />
            <div class="col-span-6 xl:col-span-6 mt-8">
                <livewire:pages.article.gallery-root :article='$article' />
            </div>
        </div>
    </x-slot>
</x-layouts.app-layout>
