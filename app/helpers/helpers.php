<?php

/**
 * Business route
 * Must use this route function inside business group
 * @return void
 */

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Get Auth User
 * @return void
 */
if (!function_exists('user')) {
    function user()
    {
        return Auth::user();
    }
}
if (!function_exists('bt_date')) {
    function bt_date($date, $time = true)
    {
        return Carbon::parse($date)->format("M d Y " . ($time ? ": h:i a" : ""));
    }
}

/**
 * Method has_alert
 *
 * @param $type $type [explicite description]
 * @param $message $message [explicite description]
 *
 * @return void
 */
if (!function_exists('has_alert')) {
    function has_alert($type, $message)
    {
        \Session::put($type, $message);
    }
}
