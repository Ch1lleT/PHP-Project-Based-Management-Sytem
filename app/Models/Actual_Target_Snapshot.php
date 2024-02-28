<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actual_Target_Snapshot extends Model
{

    protected $table = 'actual_target_snapshot';
    
    public $timestamps = false;

    protected $fillable = [
        'snap_id',
        'month',
        'acttar1',
        'acttar2',
        'acttar3',
        'acttar4',
        'acttar5',
        'acttar6',
        'acttar7',
        'acttar8',
        'acttar9',
        'acttar10',
        'acttar11',
        'acttar12',
    ];
    // use HasFactory;
}
