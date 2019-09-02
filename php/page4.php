<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        
    </script>
</head>

<body>
    <div>测试get</div>
    <div>
        <?php
            //php中函数名不区分大小写
            /* function foo($info){
                return $info;
            }
            $ret = foo("hi");
            return $ret;
            //系统函数
            // $arr = array(23,12);
            $arr = array("a" => "23","b" => "12");
            $ret = json_encode($arr);//转成json字符串
            echo $ret; */
            //get请求方式
            $f = $_GET['flag'];
            echo "<span>".$f."</span>";
            
        ?>
    </div>
</body>

</html>