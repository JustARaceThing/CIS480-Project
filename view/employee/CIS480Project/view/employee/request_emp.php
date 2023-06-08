<?php

require_once('../../model/database.php'); //connecting to db

error_reporting(E_ERROR);

$db = new Database();
if (isset($_POST['submit'])) {
    //takes var from local requestpage.php test file. needs replaced to adapt to wepage.
    $EmpName = $_POST['name'];
    $EmpID = (int)$_POST['EmpID'];
    $StartDate = $_POST['start'];
    $EndDate = $_POST['end'];
    $Comments = $_POST['comments'];

    //sets var to insert into table.
    $insert = "INSERT INTO requests VALUES ('0', '$EmpName', '$EmpID', '$StartDate', '$EndDate', '$Comments')";


    //checks conn and executes query
    if (mysqli_query($db->getDbConn(), $insert)) {
    header("Location: request_emp.php");
    } else {
    echo "Error: " . $insert . "<br>" . mysqli_error($db->getDbConn());
    }
}

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
            background-color: #1f2833;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1b263b;
            color: #fff;
            padding: 5px;
            text-align: center;
        }

        nav {
            background-color: #45a29e;
            color: #fff;
            padding: 15px;
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
            background: #c5c6c7;
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
            display: block;
            margin-left: auto;
            margin-right: auto;
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
            background-color: #1f2833;
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
    <header>
        <img src="../../images/header.png" alt="logo" class="image1">
    </header>
    <nav>
        <ul>
            <li><a href="home_emp.php">Home</a></li>
            <li><a href="schedule_emp.php">Schedule</a></li>
            <li><a href="request_emp.php">Requests</a></li>
            <li><a href="directory_emp.php">Employee Directory</a></li>
            <li><a href="../../index.php">Logout</a></li>
            <div class="dropdown">
                <button class="dropbtn">Account 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="pwChange_emp.php">Change Password</a>
                </div>
            </div>
        </ul>
    </nav>

    <main>
        <h2>Requests</h2>
        <p>Fill out the form to request paid time off.</p>
        <p><form method='POST'> 
            <h3>Name: <input type="text" name="name"></h3>
            <h3>Employee ID: <input type="text" name="EmpID"></h3>
            <h3>Start Date: <input type="date" name="start"></h3>
            <h3>End Date: <input type="date" name="end"></h3>
            <h3>Comments: <input type="text" name="comments"></h3>
            <input type="submit" value="submit" name="submit">
        </form></p>
    </main>

    <footer>
        <p>&copy; 2023 HRS Human Resource Services. All rights reserved.</p>
    </footer>
</body>

</html>
