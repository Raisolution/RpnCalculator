<?php
require_once 'OperandStack.php';
require_once 'NoSuchOperator.php';
require_once 'Add.php';
require_once 'Subtract.php';
require_once 'Factorial.php';

class RpnCalculator 
    {
                        //private $accumulator = 0;
                        //private $values = array(0);
        private $values;
        
        public function __construct()
        {
            $this->values = new OperandStack;
        }
        
        
        public function getAccumulator()
        {
            return $this->values->peek();
            
//            if(sizeof($this->values)>0) {
//                return $this->values[sizeof($this->values)-1];
//                        //before it was: return $this->accumulator;
//            } else return 0;
        }
        
        public function setAccumulator($value)
        {   
            $this->values->replaceTop($value);
            
//            if(sizeof($this->values)>0) {
//                array_pop($this->values);
//            }
//            array_push($this->values, $value);
                        //$this->accumulator = $value;
        }
        
        public function enter()
        {
            $this->values->push($this->getAccumulator());
            
            //array_push($this->values2,$this->getAccumulator());
            //array_push($this->values,$this->getAccumulator());
        }
        
        public function drop()
        {
            $this->values->pop();
            
//            if(sizeof($this->values)>0)
//                array_pop($this->values);
        }
        
//        private function add()
//        {            
//            $rhs = $this->values->peek();
//            $this->values->pop();
//            $lhs = $this->values->peek();
//            $result = $lhs + $rhs;
//            $this->values->replaceTop($result);
//        }
        
//        private function subtract()
//        {            
//            $rhs = $this->values->peek();
//            $this->values->pop();
//            $lhs = $this->values->peek();
//            $result = $lhs - $rhs;
//            $this->values->replaceTop($result);
//        }
        
//        private function factorial()
//        {
//            $operand = $this->values->peek();
//            $result = 1;
//            
//            while($operand > 0)
//            {
//               $result *= $operand; 
//               $operand -= 1;
//            }
//            
//            $this->values->replaceTop($result);
//        }
        
        public function execute($operatorName)
        {
            if($operatorName == "+"){
                $addobject = new Add;
                $addobject->execute($this->values);
                //$this->add();
            }
            else if($operatorName == "-"){
                $subtractobject = new Subtract;
                $subtractobject->execute($this->values);
                //$this->subtract ();
            }
            else if($operatorName == "!"){
                $factorialobject = new Factorial;
                $factorialobject->execute($this->values);
                //$this->factorial ();
            }
            else {
                try{
                    throw new NoSuchOperator('No such operator!');
                } catch (NoSuchOperator $e) {
                    echo 'Caught exception: '.$e->getMessage();
                }
            }
        }
    }
?>
