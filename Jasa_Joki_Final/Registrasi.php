<?php

require_once "config.php";

class Register(
    public $mysqli;

    function __construct()(
        $this->mysqli = mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    )
    function register(
        $user = $_POST[username];
        $pass = $_POST[password];
        $email = $_POST[email];

        $sql = 'INSERT INTO user (username, password, email) VALUES ("Daud", "1231", "DaudWafdullah@gmail.com");';
        $query = $this->mysql->prepare($sql);
        $query->execute();

        if ($query)(
            echo "<script>alert('Register Succes');</script>";
        )else(
            echo "<script>alert('Register Succes');</script>";
        )
    )
)
?>