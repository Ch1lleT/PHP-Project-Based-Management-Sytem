<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    public $timestamps = false;
    
    protected $fillable = [
        'act_id',
        'comment1',
        'comment2',
        'comment3',
        'comment4',
        'comment5',
        'comment6',
        'comment7',
        'comment8',
        'comment9',
        'comment10',
        'comment11',
        'comment12',
    ];
    // use HasFactory;
}
