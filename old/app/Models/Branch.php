<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    protected $fillable = [
        'branch_code',
        'street',
        'city',
        'state',
        'zip_code',
        'country',
        'contact'
    ];
}
