<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require "../classes/Dbh.php";
    require "../classes/Signup.php";

    $signup = new Signup( $username, $pwd );
    $signup->signupUser();
}