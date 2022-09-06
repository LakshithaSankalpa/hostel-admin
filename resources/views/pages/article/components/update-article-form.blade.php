<div>
    <form wire:submit.prevent="submitArticle">
        <div class="box p-5 grid grid-cols-1 gap-y-5 mt-5">
            <h2 class="intro-y text-lg font-[600] flex flex-col">
                <span>Article </span>
            </h2>
            <div class="intro-y col-span-12 sm:col-span-12">
                <label for="input-article-title"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-1">Title</label>
                <input id="input-article-title" type="text" wire:model="article.title"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-darkmode-800"
                    placeholder="Article Title Here">
                @if ($errors->has('article.title'))
                <span class="help-block text-red-600">
                    {{ $errors->first('article.title') }}
                </span>
                @endif
            </div>
            <div class="intro-y col-span-12 sm:col-span-12">
                <label for="input-article-introduction"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-1">Introduction</label>
                <textarea class="form-control" wire:model="article.introduction" id="input-article-introduction"
                    rows="3"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-darkmode-800"></textarea>
                @if ($errors->has('article.introduction'))
                <span class="help-block text-red-600">
                    {{ $errors->first('article.introduction') }}
                </span>
                @endif
            </div>
        </div>
        <div class="box grid grid-cols-12 gap-6 mt-5 p-5">
            <div class="col-span-12 xl:col-span-12">
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-12" wire:ignore>
                        <label for="formFile" class="form-label font-medium inline-block mb-2 text-gray-700">Article
                            Image</label>
                        <input
                            class="form-control dropify
                block w-full px-3 py-1.5 text-base font-normal  text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded  transition ease-in-out  m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            wire:model="articleImage" type="file" id="formFile">
                        @if ($errors->has('articleImage'))
                        <span class="help-block text-red-600">
                            {{ $errors->first('articleImage') }}
                        </span>
                        @endif
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12" wire:ignore>
                        <label for="description"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-400 mb-1">Description</label>
                        <div class="form-group" wire:ignore>
                            <textarea id="description" class="form-control" cols="10" rows="5"
                                wire:model="description"></textarea>
                            @error('description')
                            <label class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="intro-y col-span-12 flex justify-middle sm:justify-end mt-5">
                        <button class="btn btn-primary w-24 ml-2" type="submit" wire:target="submit"
                            wire:loading.attr="disabled">Update
                            <div wire:loading wire:target="submit">
                                <svg width="25" viewBox="-2 -2 42 42" xmlns="http://www.w3.org/2000/svg" stroke="white"
                                    class="w-4 h-4 ml-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(1 1)" stroke-width="4">
                                            <circle stroke-opacity=".5" cx="18" cy="18" r="18"></circle>
                                            <path d="M36 18c0-9.94-8.06-18-18-18">
                                                <animateTransform attributeName="transform" type="rotate" from="0 18 18"
                                                    to="360 18 18" dur="1s" repeatCount="indefinite">
                                                </animateTransform>
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@push('scripts')
<script>
    window.addEventListener('livewire:load', event => {

        CKEDITOR.replace('description', {

        });
        CKEDITOR.instances.description.on("change", function () { // when change description set to livewire
            @this.description = this.getData();
        });
        CKEDITOR.on('dialogDefinition', function (ev) {
            // Take the dialog name and its definition from the event
            // data.
            var dialogName = ev.data.name;
            var dialogDefinition = ev.data.definition;

            // Check if the definition is from the dialog we're
            // interested on (the Link and Image dialog).
            if (dialogName == 'link' || dialogName == 'image') {
                // remove Upload and link tab
                dialogDefinition.removeContents('Upload');
                dialogDefinition.removeContents('Link');
            }
        });


        // ClassicEditor
        //     .create(document.querySelector('#description'), {
        //         toolbar: ['insertImage']
        //     }).then(editor => {
        //         editor.setData(@this.description);

        //         editor.model.document.on('change', () => {
        //             @this.description = editor.getData();
        //             // @this.emit('setDescription', this.getData());
        //         });
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });

    });

</script>

@endpush
