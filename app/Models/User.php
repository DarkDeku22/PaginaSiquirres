<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   protected $table = 'users'; 
   protected $primaryKey = 'id_user';
   public $timestamps = false; 

    protected $fillable = [
        'fullName', 'nickName', 'email', 'backup_email', 'password', 'id_role',
    ];

    protected $hidden = [
        'password', 'remember_token', 'backup_email',
    ];
}
