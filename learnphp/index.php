<?php
    setcookie("my_name_is","Shashwat", time() + (86400 * 2), "/");
    setcookie("name_is","Yash", time() + (86400 * 3), "/");
    setcookie("is_name","Aniket", time() + (86400 * 4), "/");

    if(isset($_COOKIE["my_name_is"])){
        echo "Your name is {$_COOKIE["my_name_is"]}!!!";
    } else {
        echo "Cookie named 'my_name_is' is not set!";
    };
?>