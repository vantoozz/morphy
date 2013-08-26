<?php

namespace Vantoozz\Morphy\Facades;

use Illuminate\Support\Facades\Facade;

class Phpmorphy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'morphy';
    }
}
