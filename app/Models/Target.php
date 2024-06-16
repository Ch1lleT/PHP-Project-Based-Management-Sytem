<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Target extends Model
{
    use HasFactory;

    protected $table = 'target';
    public $timestamps = false;

    
    protected $primaryKey = 'target_id';
    public $incrementing = false;

    protected $fillable = [
        'target_id',
        'target_name',
        'stg_id',
    ];

    public function Plan(): HasMany {
        return $this->hasMany(Plan::class , 'target_id')->where("is_active" , true);
    }
}
