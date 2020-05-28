<?php

namespace application\models;

use application\core\Model;

class PostsModel extends Model
{
    public function getPostsFromJson($path)
    {
        $posts = [
            "posts" => $this->data->getPosts($path)
        ];
        return $posts;
    }

    public function getPostsFromDb()
    {
        $posts = [
            "posts" => $this->db->row('SELECT author, date, title, text FROM smvc_posts')
        ];
        return $posts;
    }
}
