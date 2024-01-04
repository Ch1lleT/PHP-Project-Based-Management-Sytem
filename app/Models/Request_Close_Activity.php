<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_Close_Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'req_id',
        'act_id',
        'approvedby',
    ];
}
