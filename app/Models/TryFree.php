<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TryFree extends Model
{
    use HasFactory;

    protected $table = "free_meeting";

    protected $fillable = [
        'title' ,
        'moderator_name' ,
        'meeting_id',
        'password',
        'attende_password',
        'phone' ,
        'email',
        'limit_participant' ,
        'time_limit',
        'link'
    ];
}
