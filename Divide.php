<?php
    require_once 'BinaryMathOperator.php';

    class Divide extends BinaryMathOperator
    {
        protected function executeImplementation($lhs, $rhs)
        {
            return $lhs/$rhs;
        }
    }

?>
