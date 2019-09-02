<?php
    //这里根据表单的name属性来获取
    $username = $_POST['username'];
    $pw = $_POST['password'];
    header("Content-Type:text/plain;charset=utf-8");//设置服务器响应的文件类型
    echo $username."<br/>";
    echo $pw."<br/>";
?>