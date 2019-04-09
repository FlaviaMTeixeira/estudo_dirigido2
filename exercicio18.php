<?php
//Faça um programa que peça 10 números inteiros, calcule e mostre a quantidade de números pares e a
//quantidade de números impares.


$par = 0;
$impar = 0;
        

for ($vezes = 1; $vezes<11; $vezes ++) {

    print "Digite um número:";
    $num = (int)fgets (STDIN);

    $resto = ($num % 2);


if ($resto == 0) {

    $par++;

} if ($resto <> 0) {

    $impar++;

} 

}
   
print "Total de números ímpares: $impar \n";
print "Total de números pares: $par \n";
print "\n";
