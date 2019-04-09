<?php

//Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar,
//sabendo que a decisão é sempre pelo mais barato.

print "Qual é o primeiro produto que você deseja saber o preço?\n";
$nome_produto1 = fgets (STDIN);

print "Quanto custa o $nome_produto1?\n";
$preco_produto1 = fgets (STDIN);

print "Qual é o segundo produto que você deseja saber o preço?\n";
$nome_produto2 = fgets (STDIN);

print "Quanto custa o $nome_produto2?\n";
$preco_produto2 = fgets (STDIN);

print "Qual é o terceiro produto que você deseja saber o preço?\n";
$nome_produto3 = fgets (STDIN);

print "Quanto custa o $nome_produto3?\n";
$preco_produto3 = fgets (STDIN);

if (($preco_produto1 < $preco_produto2) and ($preco_produto1 < $preco_produto3)) {

    print " Você deve comprar o(a) $nome_produto1, pois é o produto mais barato";

} elseif ($preco_produto2 < $preco_produto3) {

    print " Você deve comprar o(a) $nome_produto2, pois é o produto mais barato";
} else {
    print " Você deve comprar o(a) $nome_produto3, pois é o produto mais barato";
}