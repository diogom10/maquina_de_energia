<?php


namespace App\Libraries;

class Template
{
    public static function load($name = null, $variable = 'default', $data = [])
    {
        return view($name, [$variable => $data]);
    }

}

