<?php
    require_once 'RpnCalculator.php';

    class RpnCalculatorFactorialTest extends PHPUnit_Framework_TestCase
    {
        private $calculator;
        
        //Before
        public function setUp()
        {
            $this->calculator = new RpnCalculator();
        }
        
        //Test
        public function testFactorialOf0Is1()
        {
            $this->calculator->execute('!');
            $this->assertEquals(1, $this->calculator->getAccumulator());
        }
        
        //Test
        public function testFactorialOf5is120()
        {
            $this->calculator->setAccumulator(5);
            $this->calculator->execute('!');
            $this->assertEquals(120, $this->calculator->getAccumulator());
        }
    }

?>
