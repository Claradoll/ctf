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
        <!-- 登录框 -->
        <div class="container">
            <div class="form">
                <h2>登录</h2>
                <form action="login.php" method="post" onSubmit="return check_null()" id="login">
                    <div class="inputBox">
                        <input type="text" placeholder="姓名" id="username" name="username">

                    </div>
                    <div class="inputBox">
                        <input type="password" placeholder="密码" id="password" name="password">

                    </div>
                    <div class="inputBox">
                        <input type="submit" value="登录">

                    </div>
                    <p class="forget">没有账户?<a href="registry.php">
                            注册
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
$conn=Connect();

function filter($string){
    $blacklist="join|sleep|rlike|regexp|union|or|and|=| |update|delete|drop|insert|#|--|\/\*|\*\/|like|limit|!|\"|\+";
    if(preg_match_all('/'.$blacklist.'/is',$string)==1){
        echo "<script>alert('Hacker!');location.href('index.php')</script>";
        exit();
    }else {
        return $string;
    }
}

// admin'||1=(1^0)||'1
// admin'||(1^1)||'0
// adminxxx'||(0^(if((1<>1),0,1)))||'0
// adminxxx'||(0^(if((substr((select(database())),1,1)<>'c'),0,1)))||'0
// adminxxx'||(0^(if((substr((select(1)),1,1)<>'c'),0,1))||'0

if(($_POST['username']!=null&&$_POST['password']!=null)) {
    $username = filter($_POST['username']);
    $password = filter($_POST['password']);

    $sql = "SELECT * FROM `users` WHERE `username`='" . $username."';";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    if($row!=null){

        $sql2 = "SELECT * FROM `users` WHERE `username`='" . $username . "'AND `password`='" . md5($password) . "';";
        $query2 = mysqli_query($conn,$sql);
        $row2 = mysqli_fetch_array($query);
        if ((mysqli_fetch_array(mysqli_query($conn, $sql2)))!=null) {
            echo "<script>window.location.replace('Never_Gonna_Give_You_Up.php')</script>";
        } else {
            echo "<script>alert('密码错误');location.href('index.php')</script>";
        }
    } else {
        echo "<script>alert('用户名错误');location.href('index.php')</script>";
    }
}

