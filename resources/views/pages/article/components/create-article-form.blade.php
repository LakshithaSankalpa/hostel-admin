<div>
    <form wire:submit.prevent="submitArticle">
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
            <div class="intro-y col-span-6 sm:col-span-6">
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
                <textarea class="form-control" wire:model="article.introduction" id="input-article-introduction" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-darkmode-800"></textarea>
                @if ($errors->has('article.introduction'))
                <span class="help-block text-red-600">
                    {{ $errors->first('article.introduction') }}
                </span>
                @endif
            </div>
            <div class="intro-y col-span-12 flex justify-middle sm:justify-end mt-5">
                <button class="btn btn-primary w-24 ml-2" type="submit" wire:target="submit" wire:loading.attr="disabled">Create
                    <div wire:loading wire:target="submit">
                        <svg width="25" viewBox="-2 -2 42 42" xmlns="http://www.w3.org/2000/svg"
                            stroke="white" class="w-4 h-4 ml-2">
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)" stroke-width="4">
                                    <circle stroke-opacity=".5" cx="18" cy="18" r="18"></circle>
                                    <path d="M36 18c0-9.94-8.06-18-18-18">
                                        <animateTransform attributeName="transform" type="rotate"
                                            from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite">
                                        </animateTransform>
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
