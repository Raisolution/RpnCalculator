<?php
    
    require_once 'RpnCalculator.php';
    
    
    class ANewlyCreatedRpnCalculatorShould extends PHPUnit_Framework_TestCase
    {
        private $calculator ;
        
        //Before
        public function setUp()
        {
            $this->calculator = new RpnCalculator;
        }
        
        public function testHave0InItsAccumulator()
        {
            
            $this->assertEquals(0, $this->calculator->getAccumulator());
            
        }
        
        public function  testAllowItsAccumulatorToBeSet()
        {
            $value = 42;
            $this->calculator->setAccumulator($value);
            $this->assertEquals($value, $this->calculator->getAccumulator());
        }
        
//        public function testAllowMultipleValuesToBeStored()
//        {
//            $value = 42;
//            $value2 = 2;
//            $value3 = 3;
//            $this->calculator->setAccumulator($value);
//            $this->calculator->enter();
//            $this->calculator->setAccumulator($value2);
//            $this->calculator->enter();
//            $this->calculator->setAccumulator($value3);
//            $this->assertEquals($value3, $this->calculator->getAccumulator());
//            $this->calculator->drop();
//            $this->assertEquals($value2, $this->calculator->getAccumulator());
//            $this->calculator->drop();
//            $this->assertEquals($value, $this->calculator->getAccumulator());
//            $this->calculator->drop();
//            $this->assertEquals(0, $this->calculator->getAccumulator());
//        }
        
        public function testNotThrowExceptionWhenDropCalled()
        {
            $this->calculator->drop();
        }
            
    }

?>