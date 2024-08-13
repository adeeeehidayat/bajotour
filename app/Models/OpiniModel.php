<?php

namespace App\Models;

use CodeIgniter\Model;

class OpiniModel extends Model
{
    protected $table = 'opini';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'visit_date', 'email', 'experience'];
}
