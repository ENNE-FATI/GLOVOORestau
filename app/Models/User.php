<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Les attributs de la table utilisateurs qui peuvent être massivement assignés
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Les attributs qui doivent être cachés lors de la sérialisation
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Les types des attributs
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
