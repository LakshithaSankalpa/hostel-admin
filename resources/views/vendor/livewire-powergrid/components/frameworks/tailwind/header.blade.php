<div class="md:flex md:flex-row w-full justify-between items-center">

    <div class="md:flex md:flex-row w-full">

        <div>
            <x-livewire-powergrid::actions-header :theme="$theme" :actions="$this->headers" />
        </div>

        <div class="flex flex-row">
            @if (isset($createBtn) && $createBtn)
            <a href="{{ route($createBtnRedirect) }}" class="btn btn-primary shadow-md mr-2 mb-3">
                {{ $createBtnText }}
            </a>
            @endif
            @if ( isset($createModalBtn) && $createModalBtn)
            <button wire:click="openNewModal" class="btn btn-primary shadow-md mr-2 mb-3">
                {{ $createBtnText }}
            </button>
            @endif
            @if(isset($exportActive) && $exportActive)
            <div class="mr-2 mt-2 sm:mt-0">
                @include(powerGridThemeRoot().'.export')
            </div>
            @endif

            @includeIf(powerGridThemeRoot().'.toggle-columns')

        </div>

        <!-- LOADING -->
        @include(powerGridThemeRoot().'.loading')

    </div>

    @include(powerGridThemeRoot().'.search')

</div>

@include(powerGridThemeRoot().'.batch-exporting')

@include(powerGridThemeRoot().'.enabled-filters')
