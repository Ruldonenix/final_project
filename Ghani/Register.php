<?php

require_once "config.php";

class Register{
    public $mysqli;

    function __construct(){
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    function register(){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['email'];

        if(empty($user) || empty($pass) || empty($email)){
            echo "<script>alert('Form harus di isi');</script>";
        }else{

            $get_user = "SELECT * FROM user WHERE username = '$user'";
            $result = $this->mysqli->query($get_user);
            $check_user = $result->num_rows;

                if($check_user == 1){
                    echo "<script>alert('Username sudah ada');</script>";
                }else{
                $pass = password_hash($pass, PASSWORD_DEFAULT);

                $sql = 'INSERT INTO user (username, password, email) VALUES ("'.$user.'", "'.$pass.'", "'.$email.'");';
                $query = $this->mysqli->prepare($sql);
                $query->execute();

                if ($query){
                    echo "<script>alert('Register Succes');</script>";
                }else{
                    echo "<script>alert('Register Failed');</script>";
                }
            }
        }
    }
}
?>