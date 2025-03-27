<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="age">Enter your age:</label>
        <input type="text" name="age">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // $age = $_POST["age"];

    // if ($age >= 18 && $age <= 99) {
    //     echo "You are old enough to vote!";
    // } else if ( $age >= 100) {
    //     echo "You are too old, rest at home and don't vote.";
    // } else {
    //     echo "You are not old enough to vote.";
    // };

    $adult = true;

    if($adult){
        echo "You are old enough to vote!";
    } else {
        echo "You are not old enough to vote.";
    };
?>