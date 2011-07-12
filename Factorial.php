<?php
    require_once 'OperandStack.php';
    require_once 'MathOperator.php';

    class Factorial implements MathOperator
    {
        public function execute(OperandStack $values)
        {
            $operand = $values->peek();
            $result = 1;
            
            while($operand > 0)
            {
               $result *= $operand; 
               $operand -= 1;
            }
            
            $values->replaceTop($result);
        }
    }

?>
