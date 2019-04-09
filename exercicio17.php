<?php

// Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado
// ao segundo número. Não utilize a função de potência da linguagem.


print "Digite a base:";
$base = (int) fgets (STDIN);

print "Digite o expoente:";
$expoente = (int) fgets (STDIN);

$potencia_programa = pow ($base, $expoente);
$potencia = ($base ** $expoente);
    
 while ($potencia == $potencia_programa) {

    print "$potencia \n";

    print "Digite a base:";
    $base = (int) fgets (STDIN);

    print "Digite o expoente:";
    $expoente = (int) fgets (STDIN);

    
}
