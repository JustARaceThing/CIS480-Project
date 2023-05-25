<?php
require_once('../controller/employee_controller.php');
require_once('../controller/employee.php');

//default employee for update
$employee = new Employee('John', 'Doe', '', '', '', date('Y-m-d'), '3');
$employee->setEmpID('-1');

if (isset($_POST['submit'])) {
    $employee = new Employee($_POST['firstName'], $_POST['lastName'], '', '', $_POST['password'], 
        $_POST['dateHired'], '3');
    
    if ($employee->getEmpID() === '-1') {
        EmployeeController::updateSignUpEmployee($employee);
    }

    header('Location: home.php');
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
            <input type="text" name="firstName" placeholder="First Name" />
            <input type="text" name="lastName" placeholder="Last Name" />
            <input type="password" name="password" placeholder="Password" />
            <input type="date" name="dateHired" />
            <input type="submit" value="Submit" name="submit" />
        </form>
    </body>
</html>