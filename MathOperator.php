<?php
    require_once 'OperandStack.php';

    interface MathOperator {
        public function execute(OperandStack $values);
    }

?>
