<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balance extends Model
{
    protected $fillable = [
        'balance_id',
        'balance_type',
    ];
    // use HasFactory;
}
