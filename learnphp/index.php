<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="counter"> Enter a number to count to</label><br>
        <input type="number" name="counter"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $num = $_POST["counter"];

    for ($i = 1; $i <= $num; $i++) {
        echo "$i ";
    }
?>