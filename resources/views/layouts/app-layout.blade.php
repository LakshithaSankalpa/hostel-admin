<!DOCTYPE html>
<html lang="en" class="light" id="uwu-hostel-system">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('/images/hostel-system-logo.jpg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
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

<body class="main">
    <x-notifications z-index="z-[100001]" />
    {{-- Dialogs --}}
    <x-dialog z-index="z-50" blur="sm" align="center" />
    <!-- BEGIN: Mobile Menu -->
    <livewire:gb-components.mobile-menu />
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <livewire:gb-components.top-bar />
    <!-- END: Top Bar -->
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        <livewire:gb-components.side-bar-left />
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            {{$page??"Coming Soon"}}
        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: JS Assets-->
    @include('components.logout-modal')
    <!-- END: JS Assets-->
    <livewire:gb-components.alerts />
    <x-library.scripts />
</body>

</html>
