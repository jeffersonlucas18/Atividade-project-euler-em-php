<?php

// Os fatores primos de 13195 são 5, 7, 13 e 29.
// Qual é o maior fator primo do número 600851475143?

$x = 0;



for($i=2; $i<=20; $i++){
    $multiplos = 0;

    for($j = 2; $j < $i ; $j++ ) {
      
        if ($i % $j == 0 ) {
            $multiplos                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              +=1;

        }   
    }
    if ($multiplos == 0 ) {
        echo $i;

    }  

}
 



?>