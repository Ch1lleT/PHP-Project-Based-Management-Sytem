<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actual_target extends Model
{
    protected $fillable = [
        'acttarget_id',
        'acttarget_type',
    ];
    // use HasFactory;
}
