<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $table = 'track';

    protected $fillable = [
        
        'parcel_id',
        'tracking_id',
        'updated_date',
        'updated_time',
        'location',
        'cstatus',
        'remark'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('tracking_id', 'like', '%' . request('search') . '%');
        }
    }
}
