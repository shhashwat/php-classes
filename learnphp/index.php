<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="radius">radius:</label>
        <input type="text" name="radius"/><br>
        <input type="submit" value="calculate">
    </form><br>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference =  null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area , 2);

    $volume = pow($radius, 3) * pi() * (4/3);
    $volume = round($volume , 2);

    echo "Circumference : {$circumference} cms <br>";
    echo "Area : {$area} cms<sup>2</sup> <br>";
    echo "Volume : {$volume} cms<sup>3</sup> <br>";
?>