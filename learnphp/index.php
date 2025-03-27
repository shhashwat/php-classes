<?php

    function hypotenuse(int $a, int $b) {
        $c = pow($a, 2) + pow($b, 2);
        return sqrt($c);
    }

    echo hypotenuse(3,4);

?>