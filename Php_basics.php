<?php

function calculate() {
	$exp = "5+3";

if(preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $exp, $matches) !== FALSE){
    $operator = $matches[2];

    switch($operator){
        case '+':
            $op = $matches[1] + $matches[3];
			echo  "Correct = ";
            break;
        case '-':
            $op = $matches[1] - $matches[3];
			echo "Correct = ";
            break;
        case '*':
            $op = $matches[1] * $matches[3];
			echo  "Correct = ";
            break;
        case '/':
            $op = $matches[1] / $matches[3];
			echo "Correct = ";
            break;
    }

    echo $op;
	
	
}
}

calculate();








?>