<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiscalYear extends Model
{
    use HasFactory;

    
    protected $table = 'fiscal_year';

    public $fillable = [
        'year'
    ];
}
