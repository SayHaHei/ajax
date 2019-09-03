<?php
    $uname = $_POST["username"];
    $password = $_POST["password"];
    if($uname == "admin" && $password == "123")
    {
        echo '1';
    }
    else{
        echo '2';
    }
?>