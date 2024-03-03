<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    
    protected $table = "login";
    protected $fillable = ["email", "password"];
    
    protected $cast =['password' =>'encrypted',];

    protected $hidden = [
        'password',
        'remember_token',
    ];
public function getJWTIdentifier()
    {
        return $this->getKey();
    }
public function getJWTCustomClaims()
    {
        return [];
    }

}
