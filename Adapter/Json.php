<?php

namespace EtagenHubClientBundle\Adapter;

class Json
{

    public function parse($data)
    {
        return json_decode($data);
    }

    public function format($data) : string
    {
        return "Whooho, i'm a thirdparty Adapter!";//json_encode($data);
    }
}