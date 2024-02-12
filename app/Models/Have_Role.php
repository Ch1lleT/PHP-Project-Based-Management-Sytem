<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Have_Role extends Model
{
    use HasFactory;

    protected $table = 'have_role';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
