<?php
require_once('./controller/employee_controller.php');
require_once('./controller/employee.php');
require_once('./controller/validation.php');

if (isset($_POST['email']) & isset($_POST['pw'])) {
    
    $user_login = EmployeeController::validEmployee($_POST['email'], $_POST['pw']);
    
    if ($user_login === '1' || $user_login === '2') {
        header('Location: ./view/admin.php');
    }
    if ($user_login === '3') {
        header('Location: ./view/home.php');
    }

//default employee for sign-up
$employee = new Employee('', '', '', '', '', date('Y-m-d'), '3');
$employee->setEmpID(-1);

if (isset($_POST['Signup'])) {
    $employee = new Employee('John', 'Doe', $_POST['username'], $_POST['eMail'], $_POST['passWord'], '2023-05-26', '3');
    
    //password complexity validation for sign-up page
    if (isset($_POST['passWord'])) {
        $password = Validation::pwValid($_POST['passWord']);
    }

    if ($employee->getUsername() === TRUE) {
        EmployeeController::addSignUpEmployee($employee);

        header('Location: ./view/sign_up.php');
    }
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
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pw" placeholder="Password">
                </div>
                <div>
                <input type="submit" value="Login" class="btn">
                </div>
                <a href="#">Forgot Password?</a>
                <div>
                    <p class="account-text">Don't have an account?<a href="#" id="sign-up-btn2">Sign up</a></p>
                </div>
            </form>
            <form method="POST" action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" value="<?php echo $employee->getUsername(); ?>"
                        placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="eMail" value="<?php echo $employee->getEmail(); ?>" 
                        placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="passWord" value="<?php echo $employee->getPassword(); ?>"
                        placeholder="Password">
                </div>
                <div>
                    <input type="submit" value="Signup" class="btn">
                </div>
                    <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
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