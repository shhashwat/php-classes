<?php
    $password = "hvy";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("hvy", $hash)){
        echo "Password is valid!";
    }else{
        echo "Invalid Password";
    };
?>