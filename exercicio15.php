<?php

//Faça um programa que leia 5 números e informe o maior número.

print "Digite um número:";
$num_1 = (int)fgets (STDIN);

print "Digite o segundo número:";
$num_2 = (int)fgets (STDIN);

print "Digite o terceiro número:";
$num_3 = (int)fgets (STDIN);

print "Digite o quarto número:";
$num_4 = (int)fgets (STDIN);

print "Digite o quinto número:";
$num_5 = (int)fgets (STDIN);

if (($num_1 > $num_2) and ($num_1 > $num_3) and ($num_1 > $num_4) and ($num_1 > $num_5)) {
        print "$num_1 é o maior número.";
}

if (($num_1 < $num_2) and ($num_2 > $num_3) and ($num_2 > $num_4) and ($num_2 > $num_5)) {
        print "$num_2 é o maior número.";
}

if (($num_3 > $num_2) and ($num_1 < $num_3) and ($num_3 > $num_4) and ($num_3 > $num_5)) {
        print "$num_3 é o maior número.";
}

if (($num_4 > $num_2) and ($num_4 > $num_3) and ($num_1 < $num_4) and ($num_4 > $num_5)) {
        print "$num_4 é o maior número.";
}

if (($num_5 > $num_2) and ($num_5 > $num_3) and ($num_5 > $num_4) and ($num_1 < $num_5)) {
        print "$num_5 é o maior número.";
}















// if (($primeiro_num > $segundo_num) and ($primeiro_num > $terceiro_num)) {

//         print "$primeiro_num é o maior!";

// } elseif ($segundo_num > $terceiro_num) {

//         print "$segundo_num é o maior!";
// } else {
//     print "$terceiro_num é o maior";
// }