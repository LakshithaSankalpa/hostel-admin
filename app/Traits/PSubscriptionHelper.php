<?php

namespace App\Traits;

use App\Models\Profiles\Subscriptions\PSubscription;

trait PSubscriptionHelper
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
            case PSubscription::STATUS['PENDING']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-yellow-600 rounded-full badge bg-warning'>Pending</span>";
                break;
            case PSubscription::STATUS['ACTIVE']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-green-600 rounded-full badge bg-success'>Active</span>";
                break;
            case PSubscription::STATUS['DECLINED']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-success'>Declined</span>";
                break;
            case PSubscription::STATUS['EXPIRED']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-gray-600 rounded-full badge bg-success'>Expired</span>";
                break;
        }
    }
}
