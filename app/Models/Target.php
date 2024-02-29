<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $table = 'target';
    public $timestamps = false;

    
    protected $primaryKey = 'target_id';
    public $incrementing = false;

    protected $fillable = [
        'target_id',
        'target_name',
        'stg_id',
    ];
}
