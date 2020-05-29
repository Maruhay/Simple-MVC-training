<?php

namespace application\models;

use application\core\Model;
use application\db\Post;

class PostsModel extends Model
{
    public $post;

    public function __construct()
    {
        parent::__construct();
        $this->post = new Post();
    }

    public function getPostsFromJson($path)
    {
        $posts = [
            "posts" => $this->data->getPosts($path)
        ];
        return $posts;
    }

    public function getPostsFromDb()
    {
        return $this->post->getAll();
    }
}
