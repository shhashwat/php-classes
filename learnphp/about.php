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
    This website was made by <?php echo $_POST["message"]; ?>
    <form action="about.php" method="post">
        Enter your name: <br>
        <input type="text" name="message">
        <input type="submit" value="Submit"> <br>
    </form>

    Haha no seriously though it was made by Shashwat
</body>
</html>
<?php include("footer.html")?>