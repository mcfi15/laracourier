<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $table = 'track';

    protected $fillable = [
        'tracking_id',
        'updated_date',
        'updated_time',
        'location',
        'cstatus',
        'remark'
    ];
}
