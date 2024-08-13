<?php

namespace App\Models;

use CodeIgniter\Model;

class SignupModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'email', 'password'];

    public function isEmailExists($email)
    {
        return $this->where('email', $email)->first();
    }

    public function createUser($data)
    {
        return $this->insert($data);
    }
}
?>
