<?php

namespace App\Http\Livewire\Pages\Home;

use Axc\notices\Subscriptions\NSubscriptionGear;
use Axc\profiles\Subscriptions\PSubscriptionGear;
use Livewire\Component;

class TotalSubscription extends Component
{
    public $totalSubscription;
    public function render()
    {
        return view('pages.home.components.total-subscription');
    }

    public function mount()
    {
        $this->totalSubscription = PSubscriptionGear::totalSubscription() + NSubscriptionGear::totalSubscription();
    }
}
