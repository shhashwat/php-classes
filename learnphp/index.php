<?php
    $name = "Yash";
    $quanity = 5;
    $price = 7.99;
    $food = "pizza";
    $total = null;

    echo "You have ordered $quanity $food(s) for $name at a price of \$$price per $food <br>";

    $total = $quanity * $price;
    echo "Your total is \$$total <br>";
    echo"You can pay at the front register";
?>