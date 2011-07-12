<?php
    require_once 'OperandStack.php';
    require_once 'Multiply.php';
    
    class MultiplyTest extends PHPUnit_Framework_TestCase
    {
        //Test
        public function  testCanMultiplyTwoNumbers()
        {   
            $pushvalue = 3;
            $pushvalue2 = 7;
            $stack = new OperandStack;
            $stack->push($pushvalue);
            $stack->push($pushvalue2);
            
            $op = new Multiply;
            $op->execute($stack);
            
            $this->assertEquals(21, $stack->peek());
        }
    }

?>
