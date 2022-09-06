<div
    class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] -mt-7 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x md:flex xl:w-[180px] block">
            <img alt="uwu-hostel-system - Warden" class="logo__image w-10 h-10 rounded-full "
                src="{{ asset('/images/hostel-system-logo.jpg ') }}">
            <span class="logo__text text-white text-lg ml-3"> Warden Panel </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <livewire:gb-components.bread-crumbs />
                @stack('breadcrumbs')
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->

        <!-- END: Search -->
        <!-- BEGIN: Notifications -->

        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Yours to hold" src="{{ asset('images/profile-1.jpg') }}">
            </div>
            <div class="dropdown-menu w-56">
                <ul
                    class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ Auth::user()->name }}</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#logoutModal"
                            class="dropdown-item hover:bg-white/5">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
