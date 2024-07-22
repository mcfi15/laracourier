<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $table = 'parcel';

    protected $fillable = [
        'tracking_id',
        'sender_name',
        'sender_address',
        'sender_contact',
        'reci_name',
        'reci_address',
        'reci_contact',
        'status',
        'pickup_date',
        'exp_date',
        'dep_date',
        'total_price',
        'branch_pro',
        'pickup_branch',
        'carrier_no'
    ];
}
