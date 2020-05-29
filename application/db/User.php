<?php

namespace application\db;

use application\core\Entity;

class User extends Entity
{
    public $email = '';
    public $password;
    public $name = '';

    public function insert()
    {
        if (empty($this->email) || empty($this->password)) {
            return false;
        }
        $params = [
            'email' => $this->email,
            'password' => $this->password
        ];
        if (empty($this->name)) {
            $this->db->query(
                'INSERT INTO smvc_users(email, password) VALUES(:email, :password)',
                $params
            );
        } else {
            $params['name'] = $this->name;
            $this->db->query(
                'INSERT INTO smvc_users(email, password, name) VALUES(:email, :password, :name)',
                $params
            );
        }

        return true;
    }


    public function getAll()
    {
        $users = [
            "users" => $this->db->row('SELECT email, password, name FROM smvc_users')
        ];
        return $users;
    }
}
