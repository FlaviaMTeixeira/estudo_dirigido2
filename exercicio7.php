<?php
//Faça um algoritmo que leia três números e mostre o maior e o menor deles.

print "Digite um número:";
$primeiro_num = (int)fgets (STDIN);

print "Digite o segundo número:";
$segundo_num = (int)fgets (STDIN);

print "Digite o terceiro número:";
$terceiro_num = (int)fgets (STDIN);

if (($primeiro_num > $segundo_num) and ($primeiro_num > $terceiro_num)) {

    print "$primeiro_num é o maior número!\n";

} elseif ($segundo_num > $terceiro_num) {

    print "$segundo_num é o maior número!\n";
} else {
    print "$terceiro_num é o maior número!\n";
}

if (($primeiro_num < $segundo_num) and ($primeiro_num < $terceiro_num)) {

    print "$primeiro_num é o menor número!\n";

} elseif ($segundo_num < $terceiro_num) {

    print "$segundo_num é o menor número!\n";
} else {
    print "$terceiro_num é o menor número!\n";
}