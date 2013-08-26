<?php

class Morphy
{

    private $morphy;

    public function __construct()
    {
        $this->morphy = new phpMorphy(__DIR__ . '/../vendor/phpmorphy/dicts', 'ru_RU', array('storage' => PHPMORPHY_STORAGE_FILE));
    }

    public static function normalize($text)
    {
        return 'sdfsf';
    }
}
