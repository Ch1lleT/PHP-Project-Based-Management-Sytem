<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $table = 'balance';
    public $timestamps = false;

    protected $primaryKey = 'balance_id';
    public $incrementing = false;

    protected $fillable = [
        'balance_id',
        'balance_type',
    ];
    // use HasFactory;
}
