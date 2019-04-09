<?php

// A série de Fibonacci é formada pela sequência 0,1,1,2,3,5,8,13,21,34,55, [...] Faça um programa que
// gere a série até que o valor seja maior que 500.

$num_antes = 0;
$num_depois = 1;

print "$num_antes \n$num_depois \n";

    do {
        $fibonacci = $num_antes + $num_depois;

        print "$fibonacci \n";

        $num_antes = $num_depois;
        $num_depois = $fibonacci;

    } while ( $fibonacci < 500);  
