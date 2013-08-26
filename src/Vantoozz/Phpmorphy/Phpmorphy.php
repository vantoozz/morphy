<?php

namespace Vantoozz\Phpmorphy;

class Phpmorphy
{
    public static function instance()
    {

        if (!Phpmorphy::$singleton) {

            Phpmorphy::$singleton = new Phpmorphy();

        }

        return Phpmorphy::$singleton;

    }

    public static function normalize(){
        return 'lalala';
    }
}
