<?php
require_once('../controller/employee_controller.php');
require_once('../controller/employee.php');

if (isset($_POST['email']) & isset($_POST['pw'])) {
    
    $user_login = EmployeeController::validEmployee($_POST['email'], $_POST['pw']);
    
    if ($user_login === '1' || $user_login === '2' || $user_login === '3') {
        header('Location: landing_test.php');
    } else {
         echo "Incorrect Email or Password";
    }
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