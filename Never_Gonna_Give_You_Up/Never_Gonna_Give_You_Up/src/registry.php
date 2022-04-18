<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Slow_SQL</title>
</head>

<body>
<section>
    <!-- 背景颜色 -->
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
        <!-- 背景圆 -->
        <div class="circle" style="--x:0"></div>
        <div class="circle" style="--x:1"></div>
        <div class="circle" style="--x:2"></div>
        <div class="circle" style="--x:3"></div>
        <div class="circle" style="--x:4"></div>
        <!-- 注册框 -->
        <div class="container">
            <div class="form">
                <h2>注册</h2>
                <form action="registry.php" method="post" onSubmit="return check_null()" id="registry">
                    <div class="inputBox">
                        <input type="text" placeholder="姓名" id="username" name="username">

                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="密码" id="password" name="password">

                    </div>
                    <div class="inputBox">
                        <input type="submit" value="注册">

                    </div>
                    <p class="forget">已有账户?<a href="login.php">
                            登录
                        </a></p>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
<script type="text/javascript">
    function check_null() {
        var username_len = document.getElementById("username").value.length;
        var password_len = document.getElementById("password").value.length;
        if(username_len==0||password_len==0){
            alert('用户名或密码不能为空');
            return false;
        }
        return true;
    }
</script>
</html>

<?php

include "sql.php";

function filter($string){
    $blacklist="join|sleep|rlike|regexp|union|or|and|=| |update|delete|drop|insert|#|--|\/\*|\*\/|like|limit|!|\"|\+";
    if(preg_match_all('/'.$blacklist.'/is',$string)==1){
        echo "<script>alert('Hacker!');location.href('registry.php')</script>";
        exit();
    }else {
        return $string;
    }
}

$conn=Connect();

if(($_POST['username']!=null&&$_POST['password']!=null)) {
    $username = addslashes(filter($_POST['username']));
    $password = addslashes(filter($_POST['password']));
    $q = "SELECT * FROM `users` WHERE `username`= '".$username ."';";
    $query = mysqli_query($conn,$q);
    $row = mysqli_fetch_array($query);
    if($row!=null){
        echo "<script>alert('用户已存在！')</script>";
    }else {
    $sql = "INSERT INTO `users` VALUES ('" . $username . "','" . md5($password) . "')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('注册成功');location.href='index.php';</script>";
    } else {
        echo "<script>alert('注册失败')</script>";
    }
    }
}


