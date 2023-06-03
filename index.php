<?php
require_once('./controller/employee_controller.php');
require_once('./model/employee_db.php');
require_once('./controller/employee.php');
require_once('./controller/validation.php');

if (isset($_POST['email']) & isset($_POST['pw'])) {
    
    $user_login = EmployeeController::validEmployee($_POST['email'], $_POST['pw']);
    
    if ($user_login === '1' || $user_login === '2') {
        echo "<script>window.location.href = './view/admin.php';</script>";
        exit();
    } else {
        echo "<script>window.location.href = './view/home.php';</script>";
        exit();
    }
}

if (isset($_POST['username']) & isset($_POST['eMail']) & isset($_POST['passWord'])) {

    EmployeeController::newUser();
    exit();
}

if (isset($_POST['submit'])) {
    if (Validation::pwValid($_POST['password']) === 'Invalid Format') {
        echo "Password must contain 1 uppercase letter, 1 number, 1 special character (!@#$%), and be 10-20 characters long";
    } else {
        EmployeeDB::addEmployee($_POST['firstName'], $_POST['lastName'], 
            $_POST['username'], $_POST['email'], $_POST['password'], $_POST['dateHired']);

        header('Location: ./home.php');
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <title>signin-signup</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form method="POST" action="" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pw" placeholder="Password">
                </div>
                <div>
                <input type="submit" value="Signin" class="btn">
                </div>
                <a href="pswd.php">Forgot Password?</a>
            </form>
            <form method="POST" action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="firstName" placeholder= "First Name">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lastName" placeholder= "Last Name">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="drop-box">
                    <h3>Date Hired: </h3><input type="date" name="dateHired" placeholder="Date Hired">
                </div>
                <div>
                    <input type="submit" value="Signup" class="btn">
                </div>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src="images/logo.png" alt="logo" class="img">
                    <h3>Welcome back!</h3>
                    <p>Access your account from anywhere using our secure login system. Stay up to date with company news and internal communications.</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="images/login.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <img src="images/logo.png" alt="logo" class="img">
                    <h3>Welcome!</h3>
                    <p>This is our employee login portal. Access your account from anywhere using our secure login system. Stay up to date with company news and internal communications.</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="images/signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
