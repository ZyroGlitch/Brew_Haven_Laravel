<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'email',
        'username',
        'password'
    ];

    // Specify the username column for authentication
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
