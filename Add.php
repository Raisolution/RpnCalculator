<?php
    require_once 'OperandStack.php';
    require_once 'MathOperator.php';
    require_once 'BinaryMathOperator.php';

    class Add extends BinaryMathOperator
    {
          protected function executeImplementation ($lhs, $rhs)
          {
              return $lhs+$rhs;
          }
          
//        public function execute(OperandStack $values)
//        {
//            $rhs = $values->peek();
//            $values->pop();
//            $lhs = $values->peek();
//            $result = $lhs + $rhs;
//            $values->replaceTop($result);
//        }
    }

?>
