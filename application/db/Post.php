<?php

namespace application\db;

use application\core\Entity;

class Post extends Entity
{
    public $author = '';
    public $date;
    public $title = '';
    public $text = '';

    public function getAll()
    {
        $posts = [
            "posts" => $this->db->row('SELECT author, date, title, text FROM smvc_posts')
        ];
        return $posts;
    }

    public function insert()
    {
        if (empty($this->author) || empty($this->title)) {
            return false;
        }
        $params = [
            'author' => $this->author,
            'name' => $this->title,
            'date' => empty($this->date) ? time() : $this->date,
            'text' => empty($this->text) ? null : $this->text
        ];

        $this->db->query(
            'INSERT INTO smvc_posts(author, title, text, date) VALUES(:author, :title, :text, :date)',
            $params
        );
        return true;
    }
}