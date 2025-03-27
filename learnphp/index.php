<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">username:</label>
        <input type="text" name="username"><br>
        <label for="password">password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php
    foreach($_POST as $key => $value) {
        echo "$key = $value <br>";
    }

    // if(isset($_POST['login'])) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     if(empty($username)) {
    //         echo "Username is missing!";
    //     }elseif(empty($password)){
    //         echo "Password is missing!";
    //     } else {
    //         echo "Welcome $username";
    //     };
    // }
?>