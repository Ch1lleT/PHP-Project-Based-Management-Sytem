<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity';
    public $timestamps = false;

    protected $primaryKey = 'act_id';
    public $incrementing = false;
    
    protected $fillable = [
        'act_id',
        'act_name',
        'type',
        'project_id',
        'desc',
        'balance',
        'weight',
        
    ];
}
