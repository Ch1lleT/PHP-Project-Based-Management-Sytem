<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plan';
    public $timestamps = false;

    protected $primaryKey = 'plan_id';
    public $incrementing = false;

    protected $fillable = [
        'plan_id',
        'plan_name',
        'stg_id',
        'type',
        'desc',
        'weight'
    ];
}
