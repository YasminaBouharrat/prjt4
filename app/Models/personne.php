<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class Personne extends AuthenticatableUser

{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'bio', 'image', 'role',
    ];

    protected function role(): Attribute
    {
        return new Attribute([
            0, 1
        ]);
    }
}
