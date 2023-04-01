<?php

// general

for($i=0; $i <= 2; $i++) {
    for($count = 0;  $count <= $i; $count++){
        echo " ";
    }
    for($count = 3;  $count > $i; $count--){
        if($count >= 3){
            echo "*";
        }else{
            echo " ";
        }
    }
    for($count = 3;  $count > $i; $count--){
        echo " ";
    }
    for($count = 0;  $count <= $i; $count++){
        if($count <= 0){
            echo "*";
        }else{
            echo " ";
        }
    }
    echo "\n";
}

for($i=2; $i >= 0; $i--) {
    for($count = 0;  $count <= $i; $count++){
        echo " ";
    }
    for($count = 3;  $count > $i; $count--){
        if($count >= 3){
            echo "*";
        }else{
            echo " ";
        }
    }
    for($count = 3;  $count > $i; $count--){
        echo " ";
    }
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