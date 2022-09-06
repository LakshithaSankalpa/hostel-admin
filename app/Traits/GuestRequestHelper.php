<?php

namespace App\Traits;

use App\Models\Article\Article;
use App\Models\GuestRequests\GuestRequest;

trait GuestRequestHelper
{

    /**
     * Article Status
     *
     * @param  mixed $status
     * @return void
     */
    public function getStatus($status)
    {
        switch ($status) {
            case GuestRequest::STATUS['UNREAD']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-warning'>UnRead</span>";
                break;
            case GuestRequest::STATUS['READ']:
                return "<span class='inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full badge bg-success'>Read</span>";
                break;
        }
    }

    /**
     * guest request Status
     *
     * @param  mixed $status
     * @return void
     */
    public function guestRequestStatus($status)
    {
        return GuestRequest::STATUS[$status];
    }
}
