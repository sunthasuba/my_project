<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'phone', 'password', 'name'];
    protected $returnType = 'array';
    protected $useTimestamps = true;
}
