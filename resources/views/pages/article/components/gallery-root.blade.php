<div>
    <div class="flex flex-col md:flex-row bg-white shadow-all-sm rounded-[6px] border border-[#F3F4F6] ">
        <div class="flex flex-col w-[100%]">
            <form wire:submit.prevent="uploadFiles()" method="post">
                <div class="py-[40px] px-[40px]">
                    <h5 class="text-left gray-800 font-[600] text-base">Article Images</h5>
                    <div class="bg-[#EFF6FF] px-[16px] py-[16px] flex rounded-sm  mt-[24px]">
                        <p>
                            {{-- <x-library.icon icon="eye" class="w-[24px] h-[24px] text-[#1E40AF]" /> --}}
                        </p>
                        <p class="text-gray-700 ml-4">
                            Images will be displayed publicly so be careful what you use.
                        </p>
                    </div>
                    @if (count($images)>0)
                    <div class="flex flex-col mt-6">
                        <h6 class="text-sm">Uploaded Images</h6>
                        <div class="flex flex-wrap border-gray-300 border-dashed p-4 gallery">
                            @foreach ($images as $key=> $image)
                            <div class="flex flex-col relative">
                                <a href="{{ $image->image_url }}" class="border border-gray-700 m-2 p-1">
                                    <img class="max-h-[100px] shadow-lg object-top object-cover "
                                        src="{{ $image->getImageUrlAttribute() }}" alt="Gallery Image">
                                </a>
                                <span wire:click="deleteConfirm({{ $image->id }})"
                                    class="absolute top-[0px] right-[0px] bg-red-500 p-1 rounded-md shadow cursor-pointer">
                                    {{-- <x-library.icon icon="trash" class="w-[24px] h-[24px]" color="#ffffff" /> --}}
                                    <i class="text-white" data-lucide="x-square"></i>
                                </span>
                                <input type="hidden" id="foo{{ $key }}" value="{{ $image->image_url  }}">

                                <span class="absolute top-0 right-9 text-white cursor-pointer  bg-green-500 p-1 rounded"
                                    onclick="SelfCopy('{{ $image->image_url }}')" data-toggle="tooltip"
                                    title="Copy Image Url">
                                    <i data-clipboard-text="#foo{{ $key }}" data-lucide="copy"></i>
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="grid grid-cols-4">
                        <div class="col-span-4 mt-[24px]">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <h6 class="text-sm text-gray-700 font-[500]">Images gallery</h6>
                            <div id="FileUpload" x-data="{ isUploading: false, progress: 0, files: null }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                                class="relative block w-full border-2 border-gray-300 border-dashed rounded-lg p-12 text-center
                    hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                                <input type="file" multiple wire:model="photo"
                                    class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                                    x-on:change="files = $event.target.files;
                                console.log($event.target.files);" x-on:dragover="$el.classList.add('active')"
                                    x-on:dragleave="$el.classList.remove('active')"
                                    x-on:drop="$el.classList.remove('active')"
                                    accept="image/png, image/jpg, image/jpeg">
                                <template x-if="files !== null">
                                    <div class="flex flex-col space-y-1">
                                        <template x-for="(_,index) in Array.from({ length: files.length })">
                                            <div class="flex flex-col border border-gray-300 pt-3 rounded-md">
                                                <div class="flex flex-row items-center space-x-2 pb-3">
                                                    <template x-if="files[index].type.includes('image/')">
                                                        {{-- <x-library.icon icon="new-image"
                                                            class="w-[24px] h-[25px] mr-4" /> --}}
                                                    </template>
                                                    <span class="font-medium text-gray-900"
                                                        x-text="files[index].name">Uploading</span>
                                                </div>
                                                <div x-show="isUploading">
                                                    <div class="w-full mt-2 rounded-full h-[2px] dark:bg-gray-700">
                                                        <div class="bg-orange-600 h-[2px] rounded-full"
                                                            x-bind:width="progress">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                                <template x-if="files === null">
                                    <div class="flex flex-col space-y-2 items-center justify-center">
                                        {{-- <x-library.icon icon="new-image"
                                            class="w-[38px] h-[38px] text-[#9CA3AF] mx-auto" /> --}}
                                        <span class="mt-2 block text-sm font-medium text-gray-900">
                                            <span class="text-orange-500 font-[500]">Upload a file</span> <span
                                                class="text-gray-600 font-[500]">
                                                or drag and drop
                                            </span>
                                        </span>
                                        <span class="mt-2 block text-sm text-gray-600 font-[400]">
                                            <span>PNG, JPG, GIF up to (Total file size: 25MB)</span>
                                        </span>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-[24px] px-[36px] rounded-br-md rounded-bl-md flex justify-end">
                    <button type="submit" class="btn btn-secondary text-sm px-[20px] py-[9px] rounded-[6px] text-info box-shadow w-[70px]
                h-[40px]">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
{{-- <script src="https://unpkg.com/alpinejs" defer></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" ></script> --}}
<script>
    var lightbox;

    function SelfCopy(copyText) {
        navigator.clipboard.writeText(copyText);
        window.$wireui.notify({
            title: 'Link copied',
            description: 'Link copied to the clipboard successfully',
            icon: 'success'
        })
    }
    document.addEventListener('livewire:load', function () {

        lightbox = new SimpleLightbox('.gallery a', {
            animationSlide: false,
            disableRightClick: true,
            fadeSpeed: 5,
        });


    });

    Livewire.on('reloadLightBox', function (data) {
        console.log(data);
        if (lightbox) {
            lightbox = "";
        }
        lightbox = new SimpleLightbox('.gallery a', {
            animationSlide: false,
            disableRightClick: true,
            fadeSpeed: 5,
        });
    });

</script>
@endpush
