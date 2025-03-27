<?php
    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 20;
    }

    echo"The ticket price is $ticket";
?>