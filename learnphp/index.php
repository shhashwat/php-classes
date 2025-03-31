<?php
    include("database.php");

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: " . $row["id"] . "<br>";
            echo "User: ". $row["user"] ."<br>";
            echo "Registered: ". $row["reg_date"] ."<br>";
            echo "<br>";
        }
    } else{
        echo "0 results";
    }

    mysqli_close($conn);
?>