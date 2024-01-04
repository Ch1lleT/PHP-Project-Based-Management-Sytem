<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'act_id',
        'act_name',
        'type',
        'project_id',
        'desc',
        'balance',
        'weight',
        
    ];
}
