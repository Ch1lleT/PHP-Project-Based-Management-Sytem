<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'project_name',
        'plan_id',
        'executive',
        'advisor',
        'supervisor',
        'project_head',
        'type',
        'desc',
        'balance',
        'weight',
    ];
}
