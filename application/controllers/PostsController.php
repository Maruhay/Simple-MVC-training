<?php

namespace application\controllers;

use application\core\Controller;

class PostsController extends Controller
{
    public function showAction()
    {
        $posts = $this->model->getPosts('data/posts.json');
        $this->view->render('Posts', $posts);
    }
}