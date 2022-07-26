<?php

    function no1($arr) {
        $a = 0;
        $b = 0;
        
        foreach ($arr as $data) {
            if ($data == 1) {
                return $a += 2  ;
            }
            $r = $arr < $a && $arr = $a;
            
            if ($r == 0 && $data == 0 ) {
                return $a;
            }
        }
    }

    $arr = [1, 1, 0, 1, 1, 1];
    echo no1($arr);

?>