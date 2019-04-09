<?php
//Faça um programa que leia 5 números e informe a soma e a média dos números.

print "Digite um número:";
    $num_1 = (float)fgets (STDIN);

print "Digite o segundo número:";
    $num_2 = (float)fgets (STDIN);

print "Digite o terceiro número:";
    $num_3 = (float)fgets (STDIN);

print "Digite o quarto número:";
    $num_4 = (float)fgets (STDIN);

print "Digite o quinto número:";
    $num_5 = (float)fgets (STDIN);

    $soma = ($num_1 + $num_2 + $num_3 + $num_4 + $num_5);

    $media = ($soma/5);

print "A soma de todos os números é: $soma \n";
print "A média de todos os números é: $media \n";