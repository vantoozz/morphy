<?php namespace Vantoozz\Morphy\Facades;

use Illuminate\Support\Facades\Facade;

class Morphy extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'morphy';
    }

}