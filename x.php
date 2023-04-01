<?php

/** 
 * 
 * Author: Anselmo Lopes (LpxsBr) 
 * 
*/

// parte superior do X (4 triangulos)
for($i=0; $i <= 2; $i++) {
    // triagulo superior da quina esquerda
    for($count = 0;  $count <= $i; $count++){
        echo " ";
    }

    // triagulo superior do centro esquerdo
    for($count = 3;  $count > $i; $count--){
        if($count >= 3){
            echo "*";
        }else{
            echo " ";
        }
    }

    
    // triagulo superior do centro direito
    for($count = 3;  $count > $i; $count--){
        echo " ";
    }

    // triagulo superior da quina direita
    for($count = 0;  $count <= $i; $count++){
        if($count <= 0){
            echo "*";
        }else{
            echo " ";
        }
    }
    echo "\n";
}


// parte inferior do X (4 triangulos)
for($i=2; $i >= 0; $i--) {
    
    // triagulo inferior da quina esquerda
    for($count = 0;  $count <= $i; $count++){
        echo " ";
    }
    
    // triagulo inferior do centro esquerdo
    for($count = 3;  $count > $i; $count--){
        if($count >= 3){
            echo "*";
        }else{
            echo " ";
        }
    }
    
    // triagulo inferior do centro direito
    for($count = 3;  $count > $i; $count--){
        echo " ";
    }

    // triagulo inferior da quina direita
    for($count = 3;  $count > $i; $count--){
        if($count >= 3){
            echo "*";
        }else{
            echo " ";
        }
    }
    echo "\n";
}

?>