<?php

function modifyValue($value) {
    // Modify the value inside the function scope
    $value = $value * 2;
    return $value;
}

// Example usage:
$originalValue = 5;
$newValue = modifyValue($originalValue);
echo "Original value: $originalValue<br>"; // Output: Original value: 5
echo "New value: $newValue"; // Output: New value: 10
?>
