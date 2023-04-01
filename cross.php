<?php

// general

for($i=0; $i < 5; $i++) {
    if($i == 1){
        for ($j=0; $j < 5; $j++) {
            echo "*";
        }   
    }else{
        for ($j=0; $j < 5; $j++) {
            if($j == 2){echo "*";}
            else{echo " ";}
        }
    }
    echo "\n";
}


?>