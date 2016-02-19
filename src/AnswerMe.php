<?php

namespace makallio85\AnswerMe;

abstract class AnswerMe
{

    use Sides;
    use Comparsion;


    public static function is($value)
    {
        return self::addLeft($value);
    }


    public static function does($value)
    {
        return self::addLeft($value);
    }


    public static function equalsWith($value)
    {
        return self::addRight($value, '==');
    }


    public static function equalsAndHaveSameTypeWith($value)
    {
        return self::addRight($value, '===');
    }


    public static function lessThan($value)
    {
        return self::addRight($value, '<');
    }


    public static function moreThan($value)
    {
        return self::addRight($value, '>');
    }


    protected static function getAnswer()
    {
        $pairs = self::$pairs;
        self::reset();

        return call_user_func(__CLASS__ . '::' . self::$map[$pairs['operator']], $pairs['left'], $pairs['right']);
    }


    public static function isIt()
    {
        return self::getAnswer();
    }


    public static function doesIt()
    {
        return self::getAnswer();
    }
}