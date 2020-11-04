<?php
namespace console\traits;

class SingletonTrait
{
    protected static $uniqueInstance = null;

    protected function __construct()
    {
    }

    final private function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new static;
        }

        return self::$uniqueInstance;
    }
}
