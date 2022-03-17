<?php
echo $_SERVER["REMOTE_ADDR"];
if($_SERVER["REMOTE_ADDR"] != "127.0.0.1"){
    echo "Just View From 127.0.0.1";
    return;
}else{
    highlight_file(__FILE__);
    $content="<?php exit;?>";
    $content.=$_POST['txt'] AND isset($_POST['filename']) AND file_put_contents($_POST['filename'],$content);
}