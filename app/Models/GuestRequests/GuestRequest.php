<?php

namespace App\Models\GuestRequests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestRequest extends Model
{
    use HasFactory;

    const STATUS = [
        'UNREAD' => 0,
        'READ' => 1,
    ];



    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone', // initially there had a field as phone . now phone field is used to update 'name'
        'message',
        'status'
    ];

    /**
     * get unreadCount
     *
     */
    public function unreadCount()
    {
        return $this->where('status', self::STATUS['UNREAD'])->count();
    }
}
