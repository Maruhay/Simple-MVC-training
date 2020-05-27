<?php

namespace application\models;

use application\core\Model;

class PostsModel extends Model
{
    public function getPosts($path)
    {
        $posts = [
            "posts" => $this->data->getPosts($path)
        ];
        return $posts;
    }
}