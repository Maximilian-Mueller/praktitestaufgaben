<?php
for($i=1; $i < 200; $i++) {
    if($i % 2 == 0 and $i % 7 == 0){
        echo "ZweiSieben, ";
    }elseif($i % 7 == 0){
        echo "Sieben, ";
    }elseif($i % 2 == 0){
        echo "Zwei, ";
    }else{
        echo "$i, ";
    } 
}
?>