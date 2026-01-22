<?php
require_once "Login.php";
$login = new Login();
if(isset($_POST['login'])){
    $login->check_login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css">    
</head>
<body>
    <div class="login-container">
    <h1>LOGIN</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="LOGIN" id="login">
                </td>
            </tr>
        </table>
    </form>
    <a href="./registerForm.php">Belum punya akun? Register</a>
    </div>
<script src="script.js"></script>
</body>
</html>