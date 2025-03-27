<?php
    $username = "Ward Corpse";
    $phone_number = "456-567-7890";
    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username,20,"0");
    // $phone_number = str_replace("-", "/", $phone_number);
    // $email = "jTf0s@example.com";
    // $email = strrev($email);
    // $email = str_shuffle($email);

    $fullname = "Shashwat Singh Raghuvanshi";
    $fullname = explode("-", $fullname);

    foreach ($fullname as $name){
        echo"$name <br>";
    }
?>