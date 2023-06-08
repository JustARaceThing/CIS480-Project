<?php 
require_once('../model/database.php'); //connecting to db

$db = new Database();

$search = $_POST['empSearch'];
$column = $_POST['columnSelect'];

$query = "SELECT * from employee where $column = '$search'";


if ($result = mysqli_query($db->getDbConn(), $query)) {  
        $row = mysqli_fetch_array($result);
        echo $row['FirstName'],
        $row['LastName'],
        $row['Email'],
        $row['Password'],
        $row['DateHired'],
        $row['RoleID'],
        $row['EmpID'];
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($db->getDbConn());
  }

?>