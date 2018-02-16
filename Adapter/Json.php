<?php

namespace EtagenHubClientBundle\Adapter;

class Json implements \App\Components\Adapter\AdapterInterface
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