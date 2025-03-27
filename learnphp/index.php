<?php
    $hours = 56;
    $rate = 15;
    $weekly_pay = null;
    $isValid = true;

    if($hours < 0) {
        $isValid = false;
    } elseif($hours <= 40) {
        $weekly_pay = $hours * $rate;
    } else {
        $overtime = $hours - 40;
        $overtime_rate = 20;
        $weekly_pay = (40 * $rate) + ($overtime * $overtime_rate);
    };

    if($isValid) {
        echo "You made \$$weekly_pay this week";
    } else {
        echo "Hours must be greater than 0";
    };
?>