<?php
highlight_file(__FILE__);

require "flag.php";
function waf($data) {
 return str_replace('flag', '', $data);
}

class User{
    public $username;
    public $password;

    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
}
class Lost{
    public $b = 'Hartmann!!!!!!';

    function __destruct(){
        $c = 'It`s'.$this->b;
        echo $c;
    }
}
class Reader{
    public $c;
    function __toString(){
        echo file_get_contents($this->c);

        return 'damn it!';
    }
}
$u = new User($_POST['username'] ?? "admin" , $_POST['password'] ?? "admin");

if((string)$_POST['a']!==(string)$_POST['b'] && md5($_POST['a'])===md5($_POST['b'])){
    echo "success";
	unserialize(waf(serialize($u)));
}


?>