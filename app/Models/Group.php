<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'group';
    public $timestamps = false;

    protected $fillable = [
        'group_id',
        'editor',
        'group_type',
        'group_name',
        'group_json',
    ];
}
