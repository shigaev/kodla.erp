<?php

namespace common\debug;

class Test
{
    public static function debug($params)
    {
        echo '<pre>' . print_r($params, true) . '</pre>';
    }
}