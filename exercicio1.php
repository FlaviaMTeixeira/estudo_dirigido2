<?php
// Faça um algoritmo que peça dois números e imprima o maior deles. 

    print "Digite um número:";
    $primeiro_num = (int)fgets (STDIN);

    print "Digite o segundo número:";
    $segundo_num = (int)fgets (STDIN);

if ($primeiro_num > $segundo_num) {
        print "O número $primeiro_num é o maior!";

}  elseif ($primeiro_num < $segundo_num) {
        print "O número $segundo_num é o maior!";

}


