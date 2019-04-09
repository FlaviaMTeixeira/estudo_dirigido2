<?php

//Faça um algoritmo que leia três números e mostre-os em ordem decrescente.

print "Digite um número:";
$num1 = (int)fgets (STDIN);

print "Digite o segundo número:";
$num2 = (int)fgets (STDIN);

print "Digite o terceiro número:";
$num3 = (int)fgets (STDIN);


if (($num1 > $num2) and ($num1 > $num3)) {
    $primeiro = $num1;
} elseif(($num2 > $num1) and ($num2 > $num3) ) {
    $primeiro = $num2;
}else {
    $primeiro = $num3;
}


if (($num1 > $num2) and ($num1 < $num3) or ($num1 < $num2) and ($num1 > $num3) ) {
    $segundo = $num1;
} elseif(($num2 > $num1) and ($num2 < $num3) or ($num2 < $num1) and ($num2 > $num3) ) {
    $segundo = $num2;
}else {
    $segundo = $num3;
}

if (($num1 < $num2) and ($num1 < $num3)) {
    $terceiro = $num1;
} elseif(($num2 < $num1) and ($num2 < $num3) ) {
    $terceiro = $num2;
}else {
    $terceiro = $num3;
}



print "$primeiro \n";
print "$segundo \n";
print "$terceiro \n";