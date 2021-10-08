<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountInfo extends Model
{
    use HasFactory;

    protected $fillable = ['plan_id', 'month', 'total','payment_method','total_of_rooms','file','user_id','paid_at','state'];
}
