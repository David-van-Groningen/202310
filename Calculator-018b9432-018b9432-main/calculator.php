<?php

$operation = readline("Welke operatie wil je uitvoeren? (+, -)");

$a = readline("Eerste getal?");
$b = readline("Tweede getal?"); 

if ($operation == "+") {
    echo $a + $b;
} else {
    echo $a - $b;
}

?>