<?php

namespace Intervention\Image\Facades;

use Illuminate\Support\Facades\Facade;

class Phpmorphy extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phpmorphy';
    }
}
