<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target_Kpi extends Model
{
    use HasFactory;

    protected $table = 'target_kpi';
    public $timestamps = false;

    protected $fillable = [
        'targetkpi_id',
        'targetkpi_type',
    ];
}
