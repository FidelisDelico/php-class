<?php
function subtract($a, $b) {
    $result = $a - $b;
    return $result;
}

$num1 = 10;
$num2 = 5;
$subtract_result = subtract($num1, $num2);
echo "Subtraction result: $subtract_result"; // Output: Subtraction result: 5
?>