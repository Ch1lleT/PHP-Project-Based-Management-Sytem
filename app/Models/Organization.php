<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

    protected $table = 'organization';
    public $timestamps = false;
    
    protected $primaryKey = 'org_id';
    protected $incrementing = false;

    protected $fillable = [
        'org_id',
        'org_name',
    ];
    // use HasFactory;
}
