<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $this->view->render('Login');
    }

    public function registerAction()
    {
        if (!empty($_POST) && isset($_POST['submit'])) {
            if (!empty($_POST['email']) && !empty($_POST['password-1']) && !empty($_POST['password-2'])) {
                if ($_POST['password-1'] === $_POST['password-2']) {
                    $params = [
                        'email' => htmlspecialchars($_POST['email']),
                        'name' => htmlspecialchars($_POST['name']),
                        'password' => htmlspecialchars($_POST['password-1'])
                    ];
                    $this->model->registerUser($params);
                    header('Location: login');
                } else {
                    exit('Passwords musts be equal');
                }
            }
        }
        $this->view->render('Register');
    }

    public function profileAction()
    {
        $this->view->render('Profile');
    }
}