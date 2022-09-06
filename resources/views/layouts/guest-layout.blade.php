<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('images/hostel-system-logo.jpg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Manage all of your
        corporate documents in one place.">
    <meta name="keywords" content="e-sign, coporate documents">
    <meta name="author" content="LEFT4CODE">
    <title>{{$title??"uwu-hostel-system"}}</title>
    <!-- BEGIN: CSS Assets-->
    <x-library.styles />
    <!-- END: CSS Assets-->
    <!-- BEGIN: Header JS Assets-->
    <x-library.header-scripts />
    <!-- END: Header JS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <x-notifications z-index="z-[100001]" />
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Forex-app" class="w-16 h-16 rounded-full"
                        src="{{ asset('images/hostel-system-logo.jpg') }}">
                    <span class="text-white text-lg ml-3"> UWU Hostel System <span class="font-medium">Warden </span>
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="E Sign Platform" class="-intro-x w-1/2 -mt-16"
                        src="{{ asset('images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        A few more clicks to
                        <br>{{$page}} to
                        <br>your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all of your
                        corporate documents in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    {{-- <livewire:gb-components.dark-menu /> --}}
                    {{$content}}
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <!-- BEGIN: JS Assets-->
    <x-library.scripts />
    <!-- END: JS Assets-->
    <livewire:gb-components.alerts />
</body>

</html>
