<?php 
error_reporting(0);
require_once('../model/database.php'); //connecting to db

$db = new Database();
$result = "Please enter a search";

if (isset($_POST['empSubmit'])) {
    $search = $_POST['empSearch'];
    $column = $_POST['columnSelect'];
    $query = "SELECT * from employee where $column = '$search'";


    if ($result = mysqli_query($db->getDbConn(), $query)) {  
        $row = mysqli_fetch_array($result);
            $firstName = $row['FirstName'];
            $lastName = $row['LastName'];
            $Email = $row['Email'];
            $dateHired = $row['DateHired'];
            $roleId = $row['RoleID'];
            $empId = $row['EmpID'];
        } else {
            $Result = "Entry not found!";
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
    <title>Admin Portal</title>
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
    </style>
</head>

<body>
    <nav>
        <img src="../images/logo.png" alt="logo" class="image1">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="requests.php">Requests</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="databases.php">Databases</a></li>
            <li><a href="directory.php">Employee Directory</a></li>
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <h2>Employee Directory</h2>
        <div id="Employees" class="table">
            <h2>Search the employee table</h2>
            <p> <Form method="post" action="">
                <select name = "columnSelect">  
                    <option value="" name = "">Select column</option>
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
                <tr>
                    <td><?php echo $empId; ?></td>
                    <td><?php echo $firstName; ?></td>
                    <td><?php echo $lastName; ?></td>
                    <td><?php echo $Email; ?></td>
                    <td><?php echo $dateHired; ?></td>
                    <td><?php echo $roleId; ?></td>
                </tr>
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

