<div class="modal fade" class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true"
    data-tw-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-slate-500 mt-2">
                        Do You want to logout now ?
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Sure,logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
