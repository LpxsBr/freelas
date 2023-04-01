<?php

/** 
 * 
 * Author: Anselmo Lopes (LpxsBr) 
 * 
*/

// definingo as 5 linhas que serão usadas
for($i=0; $i < 5; $i++) {
    // em cada iteração de linha ele faz um teste

    /** 
     * quando $i == 1 (segunda linha),
     * ele printa uma linha completa
     * com 5 asteriscos *
     * 
     * */
    
     if($i == 1){
        for ($j=0; $j < 5; $j++) {
            echo "*";
        }   
    }
    
    /** 
     * quando $i != 1 (linhas 1, 3, 4 e 5),
     * ele printa um asterisco * quando a
     * interação interna com $j tiver $j == 2[]
     * 
     * */

    else{
        for ($j=0; $j < 5; $j++) {
            if($j == 2){
                echo "*";
            }
            else{
                echo " ";
            }
        }
    }
    echo "\n";
}


?>