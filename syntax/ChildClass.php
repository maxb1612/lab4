<?php


class ChildClass extends Singleton
{
    protected static $value;

    public function __construct($value)
    {
        parent::__construct();
        self::$value = $value;
    }

    public static function getInstance(): Singleton
    {
        return parent::getInstance();
    }

    /**
     * @return mixed
     */
    public static function getValue()
    {
        return self::$value;
    }

    /**
     * @param mixed $value
     */
    public static function setValue($value)
    {
        self::$value = $value;
    }



}