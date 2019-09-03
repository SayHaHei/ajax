<?php
    $uname = $_GET["username"];
    $password = $_GET["password"];
    if($uname == "admin" && $password == "123")
    {
        echo '1';
    }
    else{
        echo '2';
    }
?>