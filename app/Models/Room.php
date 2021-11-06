<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['meetingID','meetingName','attendeePW','moderatorPW','user_id'];
    use HasFactory;

    public function setting()
    {
        return $this->hasOne(RoomSetting::class, 'room_id', 'id');
    }
}
