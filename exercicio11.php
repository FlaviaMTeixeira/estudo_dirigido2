<?php

// Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas,
// dezenas e unidades do mesmo, observando os termos no plural a colocação do "e", da vírgula entre
// outros. Exemplo:
// 326 = 3 centenas, 2 dezenas e 6 unidades
// 12 = 1 dezena e 2 unidades

print "Digite um número entre 1 até 1000:";
    $numero = (int)fgets (STDIN);

    $centena = (int)($numero / 100);
    $dezena = (int)($numero / 10) %10;
    $unidade = (int)($numero % 10) ;

print "$numero = $centena centena(s), $dezena dezena(s) e $unidade unidade(s)";


