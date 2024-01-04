<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Have_Sub_Org extends Model
{
    protected $fillable = [
        'user_id',
        'sub_org_id',
        // 'stg_id',
    ];
    // use HasFactory;
}
