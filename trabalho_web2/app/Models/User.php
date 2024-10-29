<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];

    public function isAdmin()
    {
        return $this->email === 'admin@gmail.com';
    }
}
