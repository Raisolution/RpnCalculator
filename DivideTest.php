<?php
    require_once 'OperandStack.php';
    require_once 'Divide.php';

    class DivideTest extends PHPUnit_Framework_TestCase
    {
        //Test
        public function testShouldBeAbleToDivide()
        {
            $pushvalue = 12;
            $pushvalue2 = 2;
            $stack = new OperandStack;
            $stack->push($pushvalue);
            $stack->push($pushvalue2);
            
            $op = new Divide;
            $op->execute($stack);
            
            $this->assertEquals(6, $stack->peek());
        }
    }

?>
