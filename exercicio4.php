<?php

//Faça um algoritmo que verifique se uma letra digitada é vogal ou consoante.

print "Digite uma letra:";
$letra = fgetc (STDIN);

if (($letra == 'A') or ($letra == 'a') or ($letra == 'E') or ($letra == 'e') or ($letra == 'I') or ($letra == 'I') or ($letra == 'O') or ($letra == 'o') or ($letra == 'U') or ($letra == 'u')) {

    print "$letra é uma vogal!";

} else {
    print "$letra é uma consoante!";
}