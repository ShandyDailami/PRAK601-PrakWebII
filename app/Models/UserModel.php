<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password'];
    protected $useTimeStamps = true;
    protected $createdField = 'created_at';

    protected $validationRules = [
        'username' => 'required|is_unique[users.username]',
        'password' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'username' => [
            'is_unique' => 'Sorry, That username has already been taken. Please choose another.'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

}