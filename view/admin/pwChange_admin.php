<?php
require_once('../../controller/employee.php');
require_once('../../model/employee_db.php');
require_once('../../controller/validation.php');

if (isset($_POST['update'])) {
    if (Validation::pwValid($_POST['nPassword']) === 'Invalid Format') {
        echo "Password must contain 1 uppercase letter, 1 number, 1 special character (!@#$%?), and be 5-15 characters long";
    } else if (EmployeeDB::getEmpByPw($_POST['email'])) {
        EmployeeDB::updatePassword($_POST['email'], $_POST['nPassword']);
        echo "Password Successfully Changed!";
    } else {
        echo "Something Went Wrong :(";
    }
}

if (isset($_POST['cancel'])) {
    header('Location: home_admin.php');
}
?>
<html>
    <head>
        <title>Change Password</title>
    </head>

    <body>
        <h1>Change Password</h1>
        <form method='POST'>
                <h2><input type="text" name="email" placeholder="E-Mail" /></h2>
                <h2><input type="text" name="oPassword" placeholder="Current Password" /></h2>
                <h2><input type="text" name="nPassword" placeholder="New Password" /></h2>
                <input type="submit" name="update" value="Change Password" />
                <input type="submit" name="cancel" value="Cancel" />
                
        </form>
    </body>
</html>