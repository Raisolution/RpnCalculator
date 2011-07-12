<?php

    require_once 'RpnCalculator.php';

    class ACalculatorWithThreeValuesShould extends PHPUnit_Framework_TestCase
    {
        
        private $calculator ;
        private static $value = 42;
        private static $value2 = 2;
        private static $value3 = 3;
        
        //Before
        public function setUp()
        {
            $this->calculator = new RpnCalculator;
            $this->calculator->setAccumulator(self::$value);
            $this->calculator->enter();
            $this->calculator->setAccumulator(self::$value2);
            $this->calculator->enter();
            $this->calculator->setAccumulator(self::$value3);
        }
        
        //Test
        public function testHaveTheLastValueEnteredInItsAccumulator()
        {
            $this->assertEquals(self::$value3, $this->calculator->getAccumulator());
        }
        
        //Test
        public function testHaveTheSecondToLastValueAfterASingleDrop()
        {
            $this->calculator->drop();
            $this->assertEquals(self::$value2, $this->calculator->getAccumulator()); 
        }
        
        //Test
        public function testHaveTheFirstToLastValueAfterTwoDrops()
        {
            $this->calculator->drop();
            $this->calculator->drop();
            $this->assertEquals(self::$value, $this->calculator->getAccumulator());
        }
        
        //Test
        public function testHave0AfterThreeDrops()
        {
            $this->calculator->drop();
            $this->calculator->drop();
            $this->calculator->drop();
            $this->assertEquals(0, $this->calculator->getAccumulator());
        }
        
    }
?>
