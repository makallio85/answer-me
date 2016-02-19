<?php

namespace makallio85\AnswerMe\Test;

class ComparsionTest extends \PHPUnit_Framework_TestCase
{

    /** @type \makallio85\AnswerMe\Comparsion $Comparsion */
    protected $Comparsion;


    public function setUp()
    {
        $this->Comparsion = $this->getMockForTrait('makallio85\AnswerMe\Comparsion');
        parent::setUp();
    }


    public function testLeftLessRight()
    {
        $this->assertTrue($this->Comparsion->leftLessRight(1, 2));
        $this->assertFalse($this->Comparsion->leftLessRight(2, 2));
        $this->assertFalse($this->Comparsion->leftLessRight(2, 1));
    }


    public function testLeftLessSameRight()
    {
        $this->assertTrue($this->Comparsion->leftLessSameRight(1, 2));
        $this->assertTrue($this->Comparsion->leftLessSameRight(2, 2));
        $this->assertFalse($this->Comparsion->leftLessSameRight(2, 1));
    }


    public function testLeftEqualsRight()
    {
        $this->assertFalse($this->Comparsion->leftEqualsRight(1, 2));
        $this->assertTrue($this->Comparsion->leftEqualsRight(2, 2));
        $this->assertFalse($this->Comparsion->leftEqualsRight(2, 1));

        $this->assertTrue($this->Comparsion->leftEqualsRight('2', 2));
        $this->assertTrue($this->Comparsion->leftEqualsRight(2, '2'));
    }


    public function testLeftEqualsTypeRight()
    {
        $this->assertTrue($this->Comparsion->leftEqualsTypeRight(1, 1));
        $this->assertFalse($this->Comparsion->leftEqualsTypeRight(1, '1'));
        $this->assertFalse($this->Comparsion->leftEqualsTypeRight('1', 1));
    }


    public function testLeftMoreSameRight()
    {
        $this->assertTrue($this->Comparsion->leftMoreSameRight(2, 1));
        $this->assertTrue($this->Comparsion->leftMoreSameRight(2, 2));
        $this->assertFalse($this->Comparsion->leftMoreSameRight(1, 2));
    }


    public function testLeftMoreRight()
    {
        $this->assertTrue($this->Comparsion->leftMoreRight(2, 1));
        $this->assertFalse($this->Comparsion->leftMoreRight(2, 2));
        $this->assertFalse($this->Comparsion->leftMoreRight(1, 2));
    }
}