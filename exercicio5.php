<?php
// Faça um algoritmo para a leitura de duas notas parciais de um aluno. O programa deve calcular a média
// alcançada por aluno e apresentar:
// A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
// A mensagem "Reprovado", se a média for menor do que sete;
// A mensagem "Aprovado com Distinção", se a média for igual a dez.

print "Digite a primeira nota:";
$nota1 = (int)fgets (STDIN);

print "Digite a segunda nota:";
$nota2 = (int)fgets (STDIN);

$media = ($nota1 + $nota2)/2;

if ($media == 10) {
    print "Aprovado com distinção!";

} if ($media >= 7) {
    print "Aprovado!";

} elseif ($media < 7) {
    print "Reprovado!";

}