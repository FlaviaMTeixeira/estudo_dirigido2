<?php

// Faça um algoritmo que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O
// programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas
// seguintes situações:
// Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve
// pedir os demais valores, sendo encerrado;
// Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o
// programa;
// Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
// Se o delta for positivo, a equação possui duas raízes reais; informe-as ao usuário;

    print "Digite o valor a:";
    $a = (float)fgets(STDIN);

    while ($a == 0){
        print "A equação não é do segundo grau.\n";
        print "Operação encerrada! \n";

        print "Digite novamente o valor a:";
        $a = (float) fgets(STDIN);

    }
   
        print "Digite o valor b:";
        $b = (float) fgets(STDIN);

        print "Digite o valor c:";
        $c = (float) fgets(STDIN);


        $delta = pow($b, 2) -4 * $a * $c;
        
    if ($delta < 0) {

        print "Equação não possui raizes reais!";

    } elseif ($delta == 0) {

        $x1 = (-$b - sqrt($delta))/2*$a;
        $x2 = (-$b + sqrt($delta))/2*$a;

        print "x1 = $x1 = x2 = $x2";



    } else {
        $x1 = (-$b - sqrt($delta))/2*$a;
        $x2 = (-$b + sqrt($delta))/2*$a;

        print "Delta = $delta \n";
        print "x1 = $x1\n";
        print "x2 = $x2";
    }