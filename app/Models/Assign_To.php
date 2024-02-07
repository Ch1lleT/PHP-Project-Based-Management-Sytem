<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign_To extends Model
{
    protected $table = 'assign_to';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'project_id',
        'percent',
    ];
    // use HasFactory;
}
