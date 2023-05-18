<?php
require_once('../controller/employee_controller.php');
require_once('../controller/employee.php');
?>

<html>
    <head>
        <title>Database</title>
    </head>

    <body>
        <h1>Database Tables</h1>
        <h2>Employees</h2>
        <table>
            <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date Hired</th>
                <th>Role ID</th>
            </tr>
            <?php foreach(EmployeeController::getAllEmployees() as $employees) : ?>
            <tr>
                <td><?php echo $employees->getEmpID(); ?></td>
                <td><?php echo $employees->getFirstName(); ?></td>
                <td><?php echo $employees->getLastName(); ?></td>
                <td><?php echo $employees->getEmail(); ?></td>
                <td><?php echo $employees->getPassword(); ?></td>
                <td><?php echo $employees->getDateHired(); ?></td>
                <td><?php echo $employees->getRoleID(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <h3><a href="./index.php">Return</a></h3>
    </body>
</html>