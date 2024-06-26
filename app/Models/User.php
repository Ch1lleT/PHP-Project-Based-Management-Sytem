<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';

    protected $dates = [
        'birth_date'
    ];

    protected $dateFormat = "dd-mm-yyyy";


    public $timestamps = false;


    protected $primaryKey = 'user_id';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */



    protected $fillable = [
        'user_id',
        // 'email',
        'prefix',
        'username',
        'password',
        'first_name',
        'last_name',
        'image',
        // 'citizen_id',
        // 'position',
        'gender',
        // 'birth_date',
        'card_code',
        // 'phone',
        // 'address',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
        'birt_date' => 'date',
    ];

    // protected function password(){
    //     return 
    // };
}
