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

    <style>
        
        body {
          font-family: sans-serif;
          color: #1b263b;
        }
        
        .container{
        background-color: #fff;
          max-width: 50%;
          margin: 0 auto;
          padding: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          margin-top: 100px;
          color: #1b263b;
        }
        

        h1 {
          text-align: center;
          margin-bottom: 40px;
          padding-top: 80px;
        }
    
        h2 {
          text-align: center;
          margin-bottom: 20px;
        }
    
        p{
            text-align: center;
        }
    
        input[type="text"]{
          width: 30%;
          padding: 10px;
          border-radius: 5px;
          border: 1px solid #1b263b;
          display: block;
          margin-right: auto;
          margin-left: auto;
        }
    
        input[type="submit"] {
          width: 30%;
          padding: 10px;
          background-color: #1b263b;
          color: #fff;
          font-size: 15px;
          margin: 8px 0;;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          display: block;
          margin-right: auto;
          margin-left: auto;
        }
        
    
        input[type="submit"]:hover {
          background-color: #778da9;
        }

    </style>

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