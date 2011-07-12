<?php

    require_once 'RpnCalculator.php';

    class AnRpnCalculatorWithTwoOperandsShould extends PHPUnit_Framework_TestCase
    {
        private $calculator;
        
        //Before
        public function setUp()
        {
            $accvalue = 3;
            $accvalue2 = 4;
            $this->calculator = new RpnCalculator();
            $this->calculator->setAccumulator($accvalue);
            $this->calculator->enter();
            $this->calculator->setAccumulator($accvalue2);
            
        }
        
        public function testAddTwoNumbersCorrectly() 
        {
            
            $this->calculator->execute("+");
            $this->assertEquals(7, $this->calculator->getAccumulator());
        }
        
        public function testSubstractTwoNumbersCorrectly()
        {
            $this->calculator->execute("-");
            $this->assertEquals(-1, $this->calculator->getAccumulator());
        }
        
    }

?>
