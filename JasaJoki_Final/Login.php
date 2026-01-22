<?php

require_once "config.php";

class Login{
    public $mysqli;

    function __construct(){
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    function check_login(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(empty($userl) || empty($pass)){
            echo "<script>alert('Form harus di isi');</script>";
        }else{
            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = $this->mysqli->query($sql);
            $check_user = $result->num_rows;
            var_dump($check_user);
            if($check_user == 1){
                $row = $result->fetch_rows();
                var_dump($row);
                // if(password_verify)()
            }
        }
    }
}

?>