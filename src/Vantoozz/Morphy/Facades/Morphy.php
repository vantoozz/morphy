<?php

namespace Vantoozz\Morphy\Facades;

use Illuminate\Support\Facades\Facade;

class Morphy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'morphy';
    }
}
