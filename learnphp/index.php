<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="captials">Enter a country</label><br>
        <input type="text" name="captials"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $captials = [
        "India"=> "New Delhi",
        "Japan"=> "Tokyo",
        "Nepal"=> "Katmandu",
        "USA"=> "Washington DC",
        "UAE"=> "Dubai",
        "South Korea"=> "Seoul",
    ];

    $country = $_POST["captials"];

    echo"The captial of $country is $captials[$country]";

    // $captials["India"] = "Allahabad";
    // $captials["China"] = "Beijing";
    // array_pop($captials);

    // $keys = array_keys($captials);
    // $values = array_values($captials);

    // foreach ($values as $key) {
    //     echo"$key <br>";
    // }

    // $captials = array_flip($captials);

    // foreach ($captials as $key => $value) {
    //     echo "The captial of $key is $value <br>";
    // }
?>