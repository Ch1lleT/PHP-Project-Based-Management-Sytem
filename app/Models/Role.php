<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    public $timestamps = false;

    
    protected $primaryKey = 'role_id';
    public $incrementing = false;

    protected $fillable = [
        'role_id',
        'role_name',
    ];
}
