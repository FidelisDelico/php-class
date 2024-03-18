<?php 
    function greet($name){

        echo "How are you, $name?";
    }

    echo "Enter Your Name: ";
    $nameEntered=fgets(STDIN);

    greet($nameEntered)





?>