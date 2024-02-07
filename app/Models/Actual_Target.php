<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actual_Target extends Model
{
    protected $table = 'actual_target';
    public $timestamps = false;
    protected $fillable = [
        'acttarget_id',
        'acttarget_type',
    ];
    // use HasFactory;
}
