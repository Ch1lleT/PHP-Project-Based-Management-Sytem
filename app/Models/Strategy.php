<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    use HasFactory;

    protected $table = 'strategy';
    public $timestamps = false;


    protected $fillable = [
        'stg_id',
        'name',
        'desc'
    ];

}
