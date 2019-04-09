<?php

// Faça um algoritmo que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F -
// Feminino, M - Masculino, Sexo Inválido.

print "Digite [F] para feminino e [M] para masculino:";
$sexo =  fgetc (STDIN) ;

 if (($sexo == 'F') or ($sexo == 'f')) {

    print "Feminino";

} elseif (($sexo == 'M') or ($sexo == 'm')) {

    print "Masculino";

} else {

    print "Sexo inválido";
}