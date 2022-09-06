<?php

use Carbon\Carbon;

if (!function_exists('by_own_type')) {
    function by_own_type($query, $type, $paginate = 6)
    {
        $ownTypes = config('systemSettings.OWN_TYPES');
        switch ($type) {
            case $ownTypes['SINGLE']:
                return $query->first();
                break;
            case $ownTypes['MULTIPLE']:
                return $query->get();
                break;
            case $ownTypes['MULTIPLE_DESC']:
                return $query->orderby("{$paginate}", 'desc')->get();
                break;
            case $ownTypes['PAGINATE']:
                return $query->paginate($paginate);
                break;
            case $ownTypes['EXISTS']:
                return $query->exists();
                break;
            case $ownTypes['LIMIT']:
                return $query->limit($paginate)->get();
                break;
            case $ownTypes['COUNT']:
                return $query->count();
                break;
        }
    }
}
if (!function_exists('lock')) {
    function lock($text)
    {
        return md5($text);
    }
}

if (!function_exists('bet_date')) {
    function bet_date($date)
    {
        return Carbon::parse($date)->format('M d Y - h:i a');
    }
}

if (!function_exists('times_ago')) {

    /**
     * Method Times ago
     *
     * @param  string  $dateTime [explicits description]
     * @return void
     */
    function times_ago($dateTime)
    {
        return Carbon::createFromTimeStamp(strtotime($dateTime))->diffForHumans();
    }
}

if (!function_exists('url_replace')) {

    /**
     * Method url replace
     *
     * @param  string  $text [explicits description]
     * @return void
     */
    function url_replace($text)
    {
        return preg_replace('"\b(https?://\S+)"', '<a href="$1" target="_blank">$1</a>', $text);
    }
}
