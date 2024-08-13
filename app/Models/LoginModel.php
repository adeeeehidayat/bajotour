<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'users';

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
