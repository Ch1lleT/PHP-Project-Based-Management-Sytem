<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_Close_Activity extends Model
{
    use HasFactory;

    protected $table = 'request_close_activity';
    public $timestamps = false;
    
    protected $primaryKey = 'req_id';
    public $incrementing = false;

    protected $fillable = [
        'req_id',
        'act_id',
        'approvedby',
    ];
}
