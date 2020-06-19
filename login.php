<?php
session_start();
require_once "app/Users.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $object  = new Users();
    $object->Login($username, $password);
}

?>


<center>
    <h2>Login</h2>
</center>
<form method="POST" action="">
    <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="grey" align="center">
        <tr>
            <td>Your Email</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Your Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>