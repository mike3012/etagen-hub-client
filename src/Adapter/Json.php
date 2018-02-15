<?php

namespace Mike3012\Adapter;

class Json
{

    public function parse($data)
    {
        return json_decode($data);
    }

    public function format($data) : string
    {
        return json_encode($data);
    }
}