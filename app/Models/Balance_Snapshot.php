<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance_Snapshot extends Model
{
    protected $table = 'balance_snapshot';
    public $timestamps = false;

    protected $fillable = [
        'snap_id',
        'month',
        'balance1',
        'balance2',
        'balance3',
        'balance4',
        'balance5',
        'balance6',
        'balance7',
        'balance8',
        'balance9',
        'balance10',
        'balance11',
        'balance12',
    ];
    // use HasFactory;
}
