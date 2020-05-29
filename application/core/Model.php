<?php

namespace application\core;

use application\lib\Json;

abstract class Model
{
    public $data;

    public function __construct()
    {
        $this->data = new Json();
    }
}