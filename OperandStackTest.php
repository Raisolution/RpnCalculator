<?php
    require_once 'OperandStack.php';

    class OperandStackTest extends PHPUnit_Framework_TestCase
    {
        private $values;
        
        //Before
        public function setUp()
        {
            $this->values = new OperandStack;
        }
        
        //Test
        public function testIsNeverEmpty()
        {
            $this->assertEquals(0, $this->values->peek());
        }
        
        //Test
        public function testCanReplaceTopValue()
        {
            $ten=10;
            $this->values->replaceTop($ten);
            $this->assertEquals($ten, $this->values->peek());
        }
        
        //Test
        public function testCanHaveValuesPushed()
        {
            $one =1;
            $this->values->push($one);
            $this->assertEquals($one, $this->values->peek());
        }
        
        //Test
        public function testTopValueRemovedOnPop()
        {
            $topvalue=19;
            $this->values->replaceTop($topvalue);
            $this->values->pop();
            $this->assertEquals(0, $this->values->peek());
        }
        
        //Test
        public function testPopCanBeCalledWhenEmpty()
        {
            $this->values->pop();
        }
    }
?>
