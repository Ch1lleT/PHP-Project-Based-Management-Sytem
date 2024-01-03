<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balance_snapshot extends Model
{
    protected $fillable = [
        'snap_id',
        'month',
        'balance01',
        'balance02',
        'balance03',
        'balance04',
        'balance05',
        'balance06',
        'balance07',
        'balance08',
        'balance09',
        'balance10',
        'balance11',
        'balance12',
    ];
    // use HasFactory;
}
