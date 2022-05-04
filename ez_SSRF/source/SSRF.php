<?php
highlight_file(__FILE__);

function curl($url){

    if(filter($url)){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }
}

function filter($string){
    if(preg_match('/(127.0.0.1)/i',$string)){
        echo "???禁止访问";
        return false;
    }else if(!preg_match('/^(http)|(https)|(dict)/i',$string)){
        echo "危险危险！！！";
        return false;
    }else{
        return true;
    }
}
$url = $_GET['url'];
if(isset($url)){
curl($url);
}







































































//example.php?
?>
