<?php
require_once('../model/employee_db.php');
require_once('../controller/employee.php');
require_once('../controller/validation.php');

if (isset($_POST['submit'])) {
    if (Validation::pwValid($_POST['password']) === 'Invalid Format') {
        echo "Password must contain 1 uppercase letter, 1 number, 1 special character (!@#$%?), and be 5-10 characters long";
    } else {
        EmployeeDB::addEmployee($_POST['firstName'], $_POST['lastName'], 
            $_POST['username'], $_POST['email'], $_POST['password'], $_POST['dateHired']);

        header('Location: ./home.php');
    }
}
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <title>Welcome New Employee</title>
    </head>

    <body>
        <h2>Enter Details</h2>
        <form method='POST'>
            <h2><input type="text" name="firstName" placeholder="First Name" /></h2>
            <h2><input type="text" name="lastName" placeholder="Last Name" /></h2>
            <h2><input type="text" name="username" placeholder="Username" /></h2>
            <h2><input type="text" name="email" placeholder="Email" /></h2>
            <h2><input type="password" name="password" placeholder="New Password" /></h2>
            <h2>Hire Date: <input type="date" name="dateHired" /></h2>
            <input type="submit" value="Submit" name="submit" />
        </form>
    </body>
</html>