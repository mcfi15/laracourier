<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Parcel;

class Packages extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
      
        'parcel_id',
        'tracking_id',
        'quantity',
        'type',
        'width',
        'weight',
        'height',
        'length',
        'description',
        'price'
    ];

    // public function parcel(){
    //     return $this->belongsTo(Parcel::class);
    // }
}
