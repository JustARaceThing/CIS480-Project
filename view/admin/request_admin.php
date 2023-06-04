<?php
require_once('../../controller/requests_controller.php');
require_once('../../controller/requests.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="home.css">
<html>

<head>
    <title>Employee Portal</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1b263b;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1b263b;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #778da9;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .image1 {
            width: 10%;
            height: 10%;
            float: left;
            border-style: solid;
            border-color: #fff;
        }
        
        main{
            color: #1b263b;
            background: linear-gradient(-185deg, #e0e1dd, #778da9);
        }

        h2{
            font-size: 30px;
        }
        
        input{
            width: 100%;
            padding: 10px 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type=submit]{
            width: 100%;
            background-color: #1b263b;
            color: #fff;
            font-size: 20px;
        }
        
        
         /*responsive*/

        @media (max-width: 600px){
            header{
                padding: 10px;
            }
            nav{
                padding: 5px;
            }
            nav ul{
                padding: 5px;
            }
        }

        /*Dropdown css for account*/

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: darkblue;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <nav>
        <img src="../../images/logo.png" alt="logo" class="image1">
        <ul>
            <li><a href="home_admin.php">Home</a></li>
            <li><a href="schedule_admin.php">Schedule</a></li>
            <li><a href="request_admin.php">Requests</a></li>
            <li><a href="directory_admin.php">Employee Directory</a></li>
            <li><a href="../../index.php">Logout</a></li>
            <div class="dropdown">
                <button class="dropbtn">Account 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="pwChange_admin.php">Change Password</a>
                </div>
            </div>
        </ul>
    </nav>

    <main>
        <h2>Requests</h2>
        <p>Welcome! Here are all the recent requests!</p>
        <table>
            <tr>
                <th>RequestID</th>
                <th>Employee Name</th>
                <th>Employee ID</th>
                <th> Date Start</th>
                <th>Date End</th>
                <th>Comments</th>
            </tr>
            <?php foreach(RequestsController::getAllRequests() as $requests) : ?>
            <tr>
                <td><?php echo $requests->getRequestID(); ?></td>
                <td><?php echo $requests->getEmpName(); ?></td>
                <td><?php echo $requests->getEmpID(); ?></td>
                <td><?php echo $requests->getDateStart(); ?></td>
                <td><?php echo $requests->getDateEnd(); ?></td>
                <td><?php echo $requests->getComments(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 HRS Human Resource Services. All rights reserved.</p>
    </footer>
</body>

</html>