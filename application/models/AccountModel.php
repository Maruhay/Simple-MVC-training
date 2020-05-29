<?php

namespace application\models;

use application\core\Model;
use application\db\User;

class AccountModel extends Model
{
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }
    public function registerUser($params)
    {
        $this->user->email = $params['email'];
        $this->user->name = $params['name'];
        $this->user->password = $params['password'];
        if (!$this->user->insert()) {
            exit('Error! Cannot register user');
        }
    }
}
