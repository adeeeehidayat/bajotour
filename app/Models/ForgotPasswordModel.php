<?php

namespace App\Models;

use CodeIgniter\Model;

class ForgotPasswordModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'password'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function updatePassword($email, $password)
    {
        return $this->where('email', $email)->set(['password' => $password])->update();
    }
}
