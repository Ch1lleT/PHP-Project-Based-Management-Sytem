<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// will be delete in the future
class Log extends Model
{
    protected $table = 'log';
    public $timestamps = false;

    protected $fillable = [
        // 'date',
        // 'time',
        'user_id',
        'action',
        'desc',
        'ip'
    ];
    // use HasFactory;
}
