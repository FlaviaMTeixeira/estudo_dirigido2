<?php 
//Faça um algoritmo que imprima as seguintes figuras geométricas:

$x = 8;
//quadrado
for ($i = 1; $i <= $x ; $i++) { 

    for ($j = 1; $j <= $x ; $j++) { 
        print "* ";
    }

    print "\n";
}

print "\n";

//triangulo1

for ($k = 1; $k <= $x ; $k++) { 
    
    for ($l = 0; $l < $k ; $l++) { 
        print "* ";
    }

    print "\n";
}

print "\n";

//triangulo2

for ($l = 0; $l <= $x ; $l++) { 

    for ($m = 0; $m <= $x - $l ; $m ++) { 
        print "  ";
    }
    
    for ($m = 0; $m < $l ; $m++) { 
        print "* ";
    } 
   
    print "\n";

}