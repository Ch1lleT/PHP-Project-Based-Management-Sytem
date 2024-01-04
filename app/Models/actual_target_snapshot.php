<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actual_Target_Snapshot extends Model
{
    protected $fillable = [
        'snap_id',
        'month',
        'acttar01',
        'acttar02',
        'acttar03',
        'acttar04',
        'acttar05',
        'acttar06',
        'acttar07',
        'acttar08',
        'acttar09',
        'acttar10',
        'acttar11',
        'acttar12',
    ];
    // use HasFactory;
}
