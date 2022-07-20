<?php

function bil_faktorial($n=1){
    if($n==1){
        return 1;
    } else{
        return $n * bil_faktorial ($n-1);
    }
}

echo "9! = ".bil_faktorial(9);


?>