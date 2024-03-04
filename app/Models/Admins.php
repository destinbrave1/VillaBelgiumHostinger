<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admins extends Authenticatable
{
    use HasFactory;

    protected $table = 'Admins';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'telephone',
        'image',
        // Add any other fields that you want to be mass assignable
    ];
}
