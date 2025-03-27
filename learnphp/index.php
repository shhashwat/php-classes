<?php
    $temp = 99;
    $cloudy = true;
    
    if($temp >= 10 && $temp <= 32 ){
        echo "$temp<sup>o</sup>C is nice outside.";
    } elseif($temp < 10){
        echo "$temp<sup>o</sup>C is feezing my balls.";
    } elseif($temp > 100){
        echo "Gunna die lol";
    } else{
        echo "Its hot as FUCK";
    }
    echo"<br>";
    if(!$cloudy){
        echo "Least its not cloudy";
    } else{
        echo "Fuck this";
    }
?>