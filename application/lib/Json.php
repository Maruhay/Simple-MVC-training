<?php

namespace application\lib;

class Json
{

    public function __construct()
    {
        //
    }

    public function getPosts($path)
    {
        $data = file_get_contents($path);
        return json_decode($data, true);
    }
}
