<?php
/*  
Cada novo termo na seqüência de Fibonacci é gerado adicionando os dois termos anteriores. Começando com 1 e 2, os primeiros 10 termos serão:
1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
Considerando os termos da seqüência de Fibonacci cujos valores não excedam quatro milhões, encontre a soma dos termos com valor par.

dica :
2n=par
2n+1 = impar

*/

$a = 0;
$b = 0;
$soma = 0;

for($i=1; $i<40000; $i=($a+$b) ){
 
    $a=$b;
    $b=$i;

    if($i % 2==0){
        $soma = $i + $soma;
    }
}

echo $soma; 


?>