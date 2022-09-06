<?php

namespace App\Http\Livewire\Pages\Home;

use Axc\notices\Subscriptions\NSubscriptionGear;
use Axc\notices\UserGears\NoticeUserGear;
use Axc\profiles\Subscriptions\PSubscriptionGear;
use Axc\profiles\UserGears\ProfileUserGear;
use Livewire\Component;

class StatisticsCard extends Component
{
    public $monthPUserCount, $monthNUserCount, $nUserCount, $pUserCount;
    public $monthPSubscription, $monthNSubscription, $totalPSubscription, $totalNSubscription;
    public function render()
    {
        return view('pages.home.components.statistics-card');
    }

    public function mount()
    {
        $this->pUserCount = ProfileUserGear::all()->count();
        $this->nUserCount = NoticeUserGear::all()->count();
        $this->monthPUserCount = ProfileUserGear::getLastMonthCount();
        $this->monthNUserCount = NoticeUserGear::getLastMonthCount();
        $this->monthPSubscription = PSubscriptionGear::getLastMonthSum();
        $this->monthNSubscription = NSubscriptionGear::getLastMonthSum();
        $this->totalPSubscription = PSubscriptionGear::totalSubscription();
        $this->totalNSubscription = NSubscriptionGear::totalSubscription();
    }
}
