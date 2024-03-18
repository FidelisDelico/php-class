<?php

function add($a, $b) {
    // Perform addition
    $result = $a + $b;
    return $result;
}

// Example usage:
$num1 = 10;
$num2 = 5;
$add_result = add($num1, $num2);
echo "Addition result: $add_result"; // Output: Addition result: 15
?>

In this example, the add function takes two parameters $a and $b, adds them together, stores the result in the $result variable, and returns it using the return statement. When you call the add function with $num1 and $num2 as arguments, it returns the sum of these two numbers, which you can then use as needed.
