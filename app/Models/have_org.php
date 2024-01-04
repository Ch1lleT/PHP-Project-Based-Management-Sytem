<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Have_Org extends Model
{
    protected $fillable = [
        'user_id',
        'org_id',
    ];
    // use HasFactory;
}
