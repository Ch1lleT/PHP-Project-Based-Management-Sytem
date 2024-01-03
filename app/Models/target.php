<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class target extends Model
{
    protected $fillable = [
        'target_id',
        'target_name',
        'stg_id',
    ];
    // use HasFactory;
}
