<x-layouts.guest-layout>
    <x-slot name="title">Sign Up | {{config('app.name')}}</x-slot>
    <x-slot name="page">sign up</x-slot>
    <x-slot name="content">
        <form method="POST" action="{{ route('register') }}" id="register-form">
            @csrf
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Sign Up
            </h2>
            <div class="intro-x mt-8">

                <div class="grid grid-cols-4 gap-4">
                    <div class="col-span-4">
                        <div>
                            <label for="inp_name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="name" id="inp_name"
                                    class="form-control"
                                    placeholder="Enter your name here" value="{{old('name')}}"
                                    aria-invalid="true" aria-describedby="first-name-error">
                                @if ($errors->has('name'))
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @endif
                            </div>
                            @if ($errors->has('name'))
                            <p class="mt-2 text-sm text-red-500" id="first-name-error">
                                {{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="email" name="email" id="email"
                                    class="form-control" placeholder="Enter your email here"
                                    value="{{old('email')}}" aria-invalid="true" aria-describedby="email-error">
                                @if ($errors->has('email'))
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @endif
                            </div>
                            @if ($errors->has('email'))
                            <p class="mt-2 text-sm text-red-500" id="email-error">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div x-data="{ showPassword: true }">
                            <label for="password" class="block text-sm font-medium text-gray-700 flex">Password
                                <svg class="h-4 ml-2" stroke="currentColor" @click="showPassword = !showPassword"
                                    :class="{'hidden': !showPassword, 'block':showPassword }"
                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                </svg>

                                <svg class="h-4 ml-3" stroke="currentColor" @click="showPassword = !showPassword"
                                    :class="{'block': !showPassword, 'hidden':showPassword }"
                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                    <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                </svg>
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="password" name="password" id="password"
                                    :type="showPassword ? 'password' : 'text'" wire:model="password"
                                    class="form-control"
                                    placeholder="Enter your password here" value="{{old('password')}}"
                                    aria-invalid="true" aria-describedby="password-error">
                                @if ($errors->has('password'))
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @endif
                            </div>
                            @if ($errors->has('password'))
                            <p class="mt-2 text-sm text-red-500" id="last-name-error">{{ $errors->first('password') }}
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div x-data="{ showConPassword: true }">
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700 flex">Password
                                Confirmation
                                <svg class="h-4 ml-2" stroke="currentColor" @click="showConPassword = !showConPassword"
                                    :class="{'hidden': !showConPassword, 'block':showConPassword }"
                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                </svg>

                                <svg class="h-4 ml-3" stroke="currentColor" @click="showConPassword = !showConPassword"
                                    :class="{'block': !showConPassword, 'hidden':showConPassword }"
                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                    <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                </svg>
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    :type="showConPassword ? 'password' : 'text'" wire:model="password_confirmation"
                                    class="form-control"
                                    placeholder="Confirm your password here" value="{{old('password')}}"
                                    aria-invalid="true" aria-describedby="password-error">
                                @if ($errors->has('password_confirmation'))
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @endif
                            </div>
                            @if ($errors->has('password_confirmation'))
                            <p class="mt-2 text-sm text-red-500" id="last-name-error">
                                {{ $errors->first('password_confirmation') }}
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button type="submit"
                    class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                <a href="{{ route('login') }}"
                    class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign in</a>
            </div>
        </form>

    </x-slot>
</x-layouts.guest-layout>
