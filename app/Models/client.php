<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class Client extends AuthenticatableUser
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'bio', 'image',
    ];

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
