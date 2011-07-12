<?php

    class OperandStack
    {
        private $values = array(0);
        
//        function __construct() {
//                   $this->values = array(0);
//               }
        
        public function peek()
        {
             if(sizeof($this->values)>0) {
                return $this->values[sizeof($this->values)-1];
            } else return 0;
        }
        
        public function top()
        {
            if(sizeof($this->values)>0) {
                return $this->values[sizeof($this->values)-1];
            }
        }
        
        public function replaceTop($value)
        {
            $this->pop();
            array_push($this->values, $value);
        }
        
        public function push($value)
        {
            array_push($this->values, $value);
        }
        
        public function pop()
        {
           if(sizeof($this->values)>0)
                array_pop($this->values);
        }
    }

?>
