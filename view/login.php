<?php
require_once('../controller/employee_controller.php');
require_once('../controller/employee.php');

if (isset($_POST['email']) & isset($_POST['pw'])) {

}
?>

<html>
    <head>
        <title>Employee Login</title>
    </head>

    <body>
        <h1>Employee Login</h1>
        <form method='POST'>
            <h2>Login ID (email): <input type="text" name="email"></h2>
            <h2>Password: <input type="password" name="pw"></h2>
            <input type="submit" value="Login" name="login">
        </form>
    </body>
</html>