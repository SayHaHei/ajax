<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php 页面</title>
    <script>
        // var str = "是的"+123;
        // console.log(str);
        var json = '{"username":"zhangsan", "age":"12"}';
        var obj = JSON.parse(json);
        console.log(obj);
    </script>
</head>

<body>
    <div>welcome to php page</div>

    <?php
        //php的变量声明
        //php中的字符串拼接是.
        $num = 123;
        // echo "<div>编号为".$num."</div>";
        //php中的单引号对于其中的变量当做普通的字符串来处理
        // echo '<div>编号为 $num</div>';
        //php中的双引号对于其中的变量会把变量解析成变量值
        echo "<div>编号为 $num</div>";
        //所有的php相关的代码都要写到这里
        //echo的作用就是向页面中输出字符串
        echo '<div>Hello world!</div>';
    ?>
</body>

</html>