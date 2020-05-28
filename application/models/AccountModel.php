<?php

namespace application\models;

use application\core\Model;

class AccountModel extends Model
{

    public function registerUser($params)
    {
        $this->db->query(
            'INSERT INTO smvc_users(email, password, name) VALUES(:email, :password, :name)',
            $params
        );
    }
}
