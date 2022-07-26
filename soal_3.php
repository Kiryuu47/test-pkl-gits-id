<?php

    function bracket($data) {
        $data = array_reverse($data);
        $data2 = array();

        if ($data == "{") {
            if ($data == "}") {
                echo "Yes";
            }
        }
    }
    
    $data = "{}";
    bracket($data);

?>