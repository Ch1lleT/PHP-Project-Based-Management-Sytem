<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target_Snapshot extends Model
{
    use HasFactory;

    protected $fillable = [
        'snap_id',
        'month',
        'target1',
        'target2',
        'target3',
        'target4',
        'target5',
        'target6',
        'target7',
        'target8',
        'target9',
        'target10',
        'target11',
        'target12',
    ];
}
