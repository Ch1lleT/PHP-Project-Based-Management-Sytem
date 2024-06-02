<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FiscalYear extends Model
{
    use HasFactory;

    
    protected $table = 'fiscal_year';

    public $fillable = [
        'year'
    ];

    public function Strategy(): HasMany {
        return $this->hasMany(Strategy::class , 'year_code');
    }
}
