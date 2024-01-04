<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_act_id',
        'sub_act_name',
        'act_id',
        'type',
        'desc',
        'balance',
        'weight',
        
    ];
}
