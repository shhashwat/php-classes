<?php
    $date = date("l");
    
    switch ($date) {
        case "Monday":
            echo"$date Work day";
            break;
        case "Tuesday":
            echo"$date Work day";
            break;
        case "Wednesday":
            echo"$date Work day";
            break;
        case "Thursday":
            echo"$date Work day";
            break;
        case "Friday":
            echo"$date Work day";
            break;
        case "Saturday":
            echo"$date Weekend";
            break;
        case "Sunday":
            echo"$date Weekend";
            break;
        default:
            echo"$date Error";
    }
?>