<?php

namespace application\core;

use application\lib\Json;
use application\lib\Db;

abstract class Model
{
    public $data;
    public $db;

    public function __construct()
    {
        $this->data = new Json();
        $this->db = new Db();
    }
}