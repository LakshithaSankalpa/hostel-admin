<?php

namespace App\Traits;

use App\Models\Notice\Subscriptions\NSubscription;

trait NSubscriptionHelper
{

    /**
     * Subscription Status
     *
     * @param  mixed $status
     * @return void
     */
    public function getStatus($status)
    {
        switch ($status) {
            case NSubscription::STATUS['SUBSCRIBED']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-warning'>Subscribed</span>";
                break;
            case NSubscription::STATUS['UNSUBSCRIBED']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-success'>Unsubscribed</span>";
                break;
        }
    }
}
