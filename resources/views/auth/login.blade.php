<x-layouts.guest-layout>
    <x-slot name="title">Sign In | {{config('app.name')}}</x-slot>
    <x-slot name="page">sign in</x-slot>
    <x-slot name="content">
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            Sign In
        </h2>
        <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf
            <div class="intro-x mt-8">
                <input type="text" name="email"
                    class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
                    placeholder="Enter your email here">
                @if ($errors->has('email'))
                <span class="help-block text-red-500">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <div class="mt-4" x-data="{ showPassword: true }">
                    <div class="relative">
                        <input placeholder="Enter your password here" :type="showPassword ? 'password' : 'text'"
                            name="password" class="login__input form-control text-md block py-3 px-4 rounded-lg w-full
                        border-gray-300">
                        <div class="absolute inset-y-0 right-0 pr-5 flex items-center text-sm leading-5 cursor-pointer">

                            <svg class="h-4 text-gray-700" fill="none" @click="showPassword = !showPassword"
                                :class="{'hidden': !showPassword, 'block':showPassword }"
                                xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>

                            <svg class="h-4 text-gray-700" fill="none" @click="showPassword = !showPassword"
                                :class="{'block': !showPassword, 'hidden':showPassword }"
                                xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>

                        </div>
                    </div>
                </div>
                @if ($errors->has('password'))
                <span class="help-block text-red-500">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                <div class="flex items-center mr-auto">
                    <input id="remember-me" type="checkbox" name="remember" class="form-check-input border mr-2">
                    <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                </div>
            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit">Sign
                    in</button>
                <a href="{{ route('register') }}"
                    class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign up</a>
            </div>
        </form>
    </x-slot>
</x-layouts.guest-layout>
