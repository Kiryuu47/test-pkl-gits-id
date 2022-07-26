<?php

    function no2($i) {
        $reverse = array_reverse($i);
        foreach($reverse as $a){
        echo $a;
        }
    }
    
    $i = ["H", "E", "L", "L", "O"];
    echo "<br>";
    no2($i);

?>