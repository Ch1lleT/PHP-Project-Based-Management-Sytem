<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Organization extends Model
{
    protected $fillable = [
        'sub_org_id',
        'main_org',
        'org_name',
    ];
    // use HasFactory;
}
