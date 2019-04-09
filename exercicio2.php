<?php
//Faça um algoritmo que peça um valor e mostre na tela se o valor é positivo ou negativo.

print "Digite um valor:";
$valor = fgets (STDIN);

if ($valor > 0) {
    print "Valor positivo!";
} elseif ($valor < 0) {

    print "Valor negativo!";
}
