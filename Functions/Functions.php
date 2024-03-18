<?php 

function MyName ($name){
    echo "My name is : $name /n";


}

echo "Enter Your Name: ";
$getName=fgets(STDIN);

MyName($getName)






?>