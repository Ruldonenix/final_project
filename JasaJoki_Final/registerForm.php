<?php
require_once "Register.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $reg = new Register();
    $reg->register();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>REGISTER</h1>
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
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="reset" value="RESET" id="reset">
                    <input type="submit" value="REGISTER" id="register">
                </td>
            </tr>
        </table>
    </form>
    <a href="/loginForm.php">Login</a>
</body>
</html>