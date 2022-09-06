<?php

namespace App\Http\Livewire\GbComponents;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class SideBarLeft extends Component
{
    public $canSHowSideBar = true;

    public function render()
    {
        return view('components.side-bar-left');
    }

    public function mount()
    {
        $cuUrl = Route::currentRouteName();
        if (in_array($cuUrl, ['templates.prepare'])) {
            $this->canSHowSideBar = false;
        }
    }
}
