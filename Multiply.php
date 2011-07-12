<?php
    require_once 'BinaryMathOperator.php';

    class Multiply extends BinaryMathOperator
    {
        protected function executeImplementation($lhs, $rhs)
        {
            return $lhs*$rhs;
        }
    }

?>
