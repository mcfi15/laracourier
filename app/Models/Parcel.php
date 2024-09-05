<?php

namespace App\Models;

use App\Models\Track;
use App\Models\Images;
use App\Models\Packages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function packages(){
        return $this->hasMany(Packages::class, 'parcel_id', 'id');
    }

    public function track(){
        return $this->hasMany(Track::class, 'parcel_id', 'id');
    }

    public function images(){
        return $this->hasMany(Images::class, 'parcel_id', 'id');
    }
}
