<?php

function factorial( int $n){
    $result = 1;
    for ($i = $n; $i>1; $i--){
        $result *= $i;
    }
    return $result;
}

function serve($food = "Cigarret" , $item = "1 pis"){ // default or optional value
    echo "{$item} of {$food} has / have been served ";
}
