<?php

//Faça um programa que imprima na tela apenas os números ímpares entre 1 e 50.

$contador = 0; 
$numero = 0;

   
while ($contador < 50) {

    $contador++;
    $numero++;

    if ($numero % 2 != 0) {

    print "$numero\n" ;
    }
}
  
