<?php

function Connect()
{
//数据库基本信息
    $mysql_server_name = '127.0.0.1';
    $mysql_username = 'root';
    $mysql_password = 'root';
    $mysql_database = 'ctftraining';

//创建连接句柄
    $conn = mysqli_connect($mysql_server_name, $mysql_username, $mysql_password, $mysql_database);

//检测连接
    if (mysqli_connect_errno($conn)) {
        die("连接失败" . mysqli_connect_error());
    }

//设置编码格式
    mysqli_query($conn, "set names utf8");
    mysqli_set_charset($conn, "utf8");
    return $conn;
}
////创建表
////$sql="CREATE TABLE `flag`(".
////    "`flag` char(100));";
//$sd="DROP TABLE `users`;";
//mysqli_query($conn,$sd) OR die(mysqli_error($conn));
//
//$sql="CREATE TABLE `users`(".
//    "`username` char(20) PRIMARY KEY,".
//    "`password` char(100));";
//

////向表中插入数据
////$flag="flag{47bce5c74f589f4867dbd57e9ca9f808}";
//$sql2="INSERT INTO `users` VALUES ('admin','ee0f6964b58c9dbf58c01a88e2d36852');";
//
//
////查询表中数据
//$name="username";
//$sql3="SELECT ".$name." FROM `users`;";
//
//mysqli_query($conn,$sql);
//mysqli_query($conn,$sql2) OR die(mysqli_error($conn));
//$query = mysqli_query($conn,$sql3) ;
////var_dump($query);
//while($row = mysqli_fetch_array($query)){
//    print_r($row);
//}
