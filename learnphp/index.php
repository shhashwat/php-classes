<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="age" name="age"><br>
        email: <br>
        <input type="email" name="email"><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        // $username = filter_input(INPUT_POST,"username", FILTER_VALIDATE_);

        if(empty($email)){
            echo "ENTER A VALID email";
        } else{
            echo "Your email: $email";
        }
    }
?>