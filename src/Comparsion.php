<?php

namespace makallio85\AnswerMe;

trait Comparsion
{

    protected static $map = [
        '<'   => 'leftLessRight',
        '<='  => 'leftLessSameRight',
        '=='  => 'leftEqualsRight',
        '===' => 'leftEqualsTypeRight',
        '>='  => 'leftMoreSameRight',
        '>'   => 'leftMoreRight',
    ];


    public function leftLessRight($left, $right)
    {
        return $left < $right;
    }


    public function leftLessSameRight($left, $right)
    {
        return $left <= $right;
    }


    public function leftEqualsRight($left, $right)
    {
        return $left == $right;
    }


    public function leftEqualsTypeRight($left, $right)
    {
        return $left === $right;
    }


    public function leftMoreSameRight($left, $right)
    {
        return $left >= $right;
    }


    public function leftMoreRight($left, $right)
    {
        return $left > $right;
    }
}