<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table= 'users';
    protected $primaryKey= 'id';


    protected $fillable = [
        'name',
        'wallet',
        'email',
        'password',
        'role',
    ];

//    protected $guarded=[];
//created_at and updated_at wont be inserted by laravel
    // public $timestamps=false;
 // if you wanna change the name of two fields
    //const CREATED_AT = 'registered_at';
    //const UPDATED_AT  = 'edited_at';

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
