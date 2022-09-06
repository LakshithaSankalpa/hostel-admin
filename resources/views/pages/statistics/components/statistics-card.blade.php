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
             <button class="btn btn-outline-secondary relative justify-start rounded-full mt-12">
                 Download Reports
                 <span
                     class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                     <i data-lucide="arrow-right" class="w-4 h-4"></i> </span>
             </button>
         </div>
         <div
             class="col-span-12 lg:col-span-8 p-8 border-t lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
             <ul class=" nav nav-pills w-60 border border-slate-300 dark:border-darkmode-300 border-dashed rounded-md mx-auto p-1 mb-8 "
                 role="tablist">
                 <li id="weekly-report-tab" class="nav-item flex-1" role="presentation">
                     <button class="nav-link w-full py-1.5 px-2 active" data-tw-toggle="pill"
                         data-tw-target="#weekly-report" type="button" role="tab" aria-controls="weekly-report"
                         aria-selected="true"> Weekly </button>
                 </li>
                 <li id="monthly-report-tab" class="nav-item flex-1" role="presentation">
                     <button class="nav-link w-full py-1.5 px-2" data-tw-toggle="pill" data-tw-target="#monthly-report"
                         type="button" role="tab" aria-selected="false">
                         Monthly </button>
                 </li>
             </ul>
             <div class="tab-content px-5 pb-5">
                 <div class="tab-pane active grid grid-cols-12 gap-y-8 gap-x-10" id="weekly-report" role="tabpanel"
                     aria-labelledby="weekly-report-tab">
                     <div class="col-span-8">
                         <div class="grid grid-cols-12">
                             <div class="col-span-6 sm:col-span-6 md:col-span-6">
                                 <div class="text-slate-500">New profiles <small><sup>(users)</sup></small></div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">4.501</div>
                                     <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2"
                                         title="2% Lower than last month"> 0 </div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6">
                                 <div class="text-slate-500">Love Notices <small><sup>(users)</sup></small></div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">0</div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6 mt-4">
                                 <div class="text-slate-500">Profile Subscriptions</div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">$0.00 (0)</div>
                                 </div>
                             </div>
                             <div class="col-span-12 sm:col-span-6 md:col-span-6 mt-4">
                                 <div class="text-slate-500">Love Notices Subscription</div>
                                 <div class="mt-1.5 flex items-center">
                                     <div class="text-base">$0.00 (0)</div>
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
