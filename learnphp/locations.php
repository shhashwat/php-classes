<?php include("headers.html")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        About
    </title>
</head>
<body>
    <p>
        Shashwat is from, Allahabad, where are you from?
    </p>
    <form action="locations.php" method="post">
        <span>Enter your location:</span> <br>
        <input type="text" name="location">
        <input type="submit" value="Submit"> <br>
    </form>
    The following person is from <?php 
    $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $location; ?>

</body>
</html>
<?php include("footer.html")?>