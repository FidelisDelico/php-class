<?php
function add(){
  echo "Enter first number:";
  $num1= fgets(STDIN);
  // Converting the input to float since fgets returns a string
  $num1 = (float)$num1;
  
  echo "Enter second number:";
  $num2= fgets(STDIN);
  
  $num2 = (float)$num2;

  // Calculating the sum
  $result = $num1 + $num2;

  echo "Addition result: $result";
}

// Calling the function to execute it
add();
?>