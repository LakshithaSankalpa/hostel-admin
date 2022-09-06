 <div class="report-box-2 intro-y mt-5">
     <div class="box grid grid-cols-12">
         <div class="col-span-12 lg:col-span-4 px-8 py-12 flex flex-col justify-center">
             <i data-lucide="pie-chart" class="w-10 h-10 text-pending"></i>
             <div class="justify-start flex items-center text-slate-600 dark:text-slate-300 mt-12">
                 Total Income
                 <i data-lucide="alert-circle" class="tooltip w-4 h-4 ml-1.5"
                     title="Total value of your sales: $158.409.416"></i> </div>
             <div class="flex items-center justify-start mt-4">
                <livewire:pages.home.total-subscription>
                 <a class="text-slate-500 ml-4" href=""> <i data-lucide="refresh-ccw" class="w-4 h-4"></i>
                 </a>
             </div>
             <div class="mt-4 text-slate-500 text-xs">Last updated 1 min ago</div>

         </div>
         <div
             class="col-span-12 lg:col-span-8 p-8 border-t lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
             <ul class=" nav nav-pills w-60 border border-slate-300 dark:border-darkmode-300 border-dashed rounded-md mx-auto p-1 mb-8 "
                 role="tablist">
                 <li id="weekly-report-tab" class="nav-item flex-1" role="presentation">
                     <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill"
                         data-tw-target="#weekly-report" type="button" role="tab" aria-controls="weekly-report"
                         aria-selected="true"> Last Month </button>
                 </li>
                 <li id="monthly-report-tab" class="nav-item flex-1" role="presentation">
                     <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill" data-tw-target="#monthly-report"
                         type="button" role="tab" aria-selected="false">
                         Overall </button>
                 </li>
             </ul>
             <div class="tab-content px-5 pb-5">
                 <div class="tab-pane active grid grid-cols-12 gap-y-8 gap-x-10" id="weekly-report" role="tabpanel"
                     aria-labelledby="weekly-report-tab">
                     <div class="col-span-8">
                         <div class="grid grid-cols-12">
                             <div class="col-span-6 sm:col-span-6 md:col-span-6">
                                 <div class="text-slate-500">New Profiles <small><sup>(users)</sup></small></div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">{{ $monthPUserCount }}</div>
                                     <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                         title="2% Lower than last month">  </div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6">
                                 <div class="text-slate-500">Love Notices <small><sup>(users)</sup></small></div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">{{ $monthNUserCount }}</div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6 mt-4">
                                 <div class="text-slate-500">Profile Subscriptions</div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">${{ $monthPSubscription }}</div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6 mt-4">
                                 <div class="text-slate-500">Love Notices Subscription</div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">${{ $monthNSubscription }}</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-span-4">

                     </div>
                 </div>
                  <div class="tab-pane  grid grid-cols-12 gap-y-8 gap-x-10" id="monthly-report" role="tabpanel"
                     aria-labelledby="monthly-report-tab">
                     <div class="col-span-8">
                         <div class="grid grid-cols-12">
                             <div class="col-span-6 sm:col-span-6 md:col-span-6">
                                 <div class="text-slate-500">New Profiles <small><sup>(users)</sup></small></div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">{{ $pUserCount }}</div>
                                     <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                         title="2% Lower than last month">  </div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6">
                                 <div class="text-slate-500">Love Notices <small><sup>(users)</sup></small></div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">{{ $nUserCount }}</div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6 mt-4">
                                 <div class="text-slate-500">Profile Subscriptions</div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">${{ $totalPSubscription }}</div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6 mt-4">
                                 <div class="text-slate-500">Love Notices Subscription</div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">${{ $totalNSubscription }}</div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-span-4">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
