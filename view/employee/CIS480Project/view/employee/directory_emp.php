<?php
error_reporting(0);
require_once('../../model/database.php');

$db = new Database();



if (isset($_POST['empSubmit'])) {
    $search = $_POST['empSearch'];
    $column = $_POST['columnSelect'];
    $query = "SELECT * from employee where $column like '$search'";
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
            margin-right: auto;
            margin-left: auto;
        }
        select {
            height: 30px;
            font-size: 15px;
            color: #1b263b;
        }

        input[type=text]{
            height: 25px;
            color: #1b263b;
        }

        input[type=submit]{
            width: 10%;
            height: 30px;
            font-size: 15px;
            color: #fff;
            background-color: #1b263b;
            border-radius: 4px;
            box-shadow: none;
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
        <h2>Employee Directory</h2>
        <div id="Employees" class="table">
            <p>Search the employee table by column. Wilcard characters are supported!</p>
            <p> <Form method="post" action="">
                <select name = "columnSelect">  
                    <option value="" name = "">Select column</option>
                    <option value="EmpID">Employee ID</option>
                    <option value="FirstName">First Name</option>
                    <option value="LastName">Last Name</option>
                    <option value="UserName">User Name</option> 
                    <option value="Email">Email</option>
                    <option value="DateHired">Date Hired</option>
                    <option value="RoleID">Role ID</option>  
                <select>
                <input type = "text" name="empSearch"/>
                <input type ="submit" name="empSubmit"/>
                </Form>
            </p>
                <div><table>
                <tr>
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date Hired</th>
                        <th>Role ID</th>
                </tr>
                <?php
                if ($result = mysqli_query($db->getDbConn(), $query)) { 
                    while($row = mysqli_fetch_array($result))
                            {
                        echo "<tr><td>" . $row["EmpID"]. "</td><td>" . $row['FirstName'] . "</td><td> " . $row['LastName'] .  "</td><td>" . $row['Email'] . "</td><td>" . $row['DateHired'] . "</td><td>" .$row['RoleID'] . "</td></tr>";
                            }
                }
                else {
                    echo "No matches found!";
                }
            ?>
            </table>
                </div>
        </div>

        <div id="requests" class="table" style="display:none">
        <p>
                <input type = "text" name="requestSearch"/>
                <input type ="submit" name="empSubmit"/>
            </p>
        </div>

        <div id="schedule" class="table" style="display:none">
            <h2>WORK IN PROGRESS</h2>
            <p>Check back when the schedule page is working</p>
            </div>
    </main>

    <footer>
        <p>&copy; 2023 HRS Human Resource Services. All rights reserved.</p>
    </footer>
</body>

</html>
<script>function openTable(tableName) {
  var i;
  var x = document.getElementsByClassName("table");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tableName).style.display = "block";
}
</script>
