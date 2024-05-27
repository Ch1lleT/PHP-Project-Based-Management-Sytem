<?php

namespace App\Models;

use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Organization extends Model
{
    protected $table = 'sub_organization';
    public $timestamps = false;

    
    protected $primaryKey = 'sub_org_id';
    public $incrementing = false;

    protected $fillable = [
        'sub_org_id',
        'main_org',
        'org_name',
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function ($model){
            if( is_null($model->sub_org_id) || $model->sub_org_id == "" ){
                $model->sub_org_id = UUID::uuid($model);
            }
            
        });
    }

}
