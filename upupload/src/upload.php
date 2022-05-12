<?php

$userdir = "upload";
if (!file_exists($userdir)) {
    mkdir($userdir, 0777, true);
}
if (isset($_FILES["image"])) {
    $tmp_name = $_FILES["image"]["tmp_name"];
    $file_name = $_FILES["image"]["name"];
    $temp = explode(".", $file_name);
    $extension = end($temp);
    if ((($_FILES["image"]["type"] == "image/gif")
            || ($_FILES["image"]["type"] == "image/jpeg")
            || ($_FILES["image"]["type"] == "image/png"))
        && ($_FILES["image"]["size"] < 204800)   // 小于 200 kb

    ) {

        if ($_FILES["image"]["error"] > 0) {
            echo "错误：: " . $_FILES["image"]["error"] . "<br>";
            die();
        } else {
            move_uploaded_file($tmp_name, $userdir . "/" . md5($file_name) . "." . $extension);
            echo "文件存储在: " . $userdir . "/" . md5($file_name) . "." . $extension;
        }
    } else {
        echo "只能上传文件！";
    }
    
}
