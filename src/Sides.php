<?php

namespace makallio85\AnswerMe;

trait Sides
{

    protected static $pairs = [];


    protected static function addLeft($value)
    {
        self::$pairs['left'] = $value;

        return __CLASS__;
    }


    protected static function addRight($value, $operator)
    {
        if (!isset(self::$pairs['right'])) {
            self::$pairs['right'] = $value;
            self::$pairs['operator'] = $operator;

            return __CLASS__;
        }

        throw new \Exception('Missing left value!');
    }


    protected static function reset()
    {
        self::$pairs = [];
    }
}