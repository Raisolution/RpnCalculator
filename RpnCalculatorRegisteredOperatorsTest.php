<?php
    require_once 'RpnCalculator.php';

    class RpnCalculatorRegisteredOperatorsTest extends PHPUnit_Framework_TestCase
    {
        private $calculator ;
        private static $value = 42;
        private static $value2 = 4;
        
        //Before
        public function setUp()
        {
            $this->calculator = new RpnCalculator;
            $this->calculator->setAccumulator(self::$value);
            $this->calculator->enter();
            $this->calculator->setAccumulator(self::$value2);
        }
        
        //Test
        public function testShouldBeAbleToAdd()
        {
            $this->calculator->execute("+");
            $this->assertEquals(46, $this->calculator->getAccumulator());
        }
        
        //Test
        public function testShouldBeAbletoSubstract()
        {
            $this->calculator->execute("-");
            $this->assertEquals(38, $this->calculator->getAccumulator());
        }
        
        //Test
        public function  testShouldBeAbleToCalculateFactorial()
        {
            
            $this->calculator->execute("!");
            $this->assertEquals(24, $this->calculator->getAccumulator());
        }
        
        //Test
        public function testShouldThrowExceptionForUnknownOperator()
        {
            $this->calculator->execute("bogus___operator");
        }
    }

?>
