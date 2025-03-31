<?php
    include("database.php");

    $username = "goku";
    $password = "notlikeus";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "New record created successfully";
    } catch (mysqli_sql_exception) {
        echo "Couldn't register the user";
    }


    mysqli_close($conn);
?>