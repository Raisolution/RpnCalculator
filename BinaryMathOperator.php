<?php
    require_once 'MathOperator.php';

    abstract class BinaryMathOperator implements MathOperator
    {
        public final function execute(OperandStack $values)
        {
            $rhs = $values->peek();
            $values->pop();
            $lhs = $values->peek();
            $result = $this->executeImplementation($lhs, $rhs);
            $values->replaceTop($result);
        }
        
        abstract protected function executeImplementation ($lhs, $rhs); 
    }

?>
