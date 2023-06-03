<?php 
require_once('../model/database.php'); //connecting to db

$db = new Database();

$search = $_POST['employeeSearch'];

$query = "SELECT * from employee where LastName = '$search'";

if (mysqli_query($db->getDbConn(), $query)) {  
        $row = mysqli_fetch_array(mysqli_query($db->getDbConn(), $query), $query);
        echo $row['RequestID'],
        $row['EmpName'],
        $row['EmpID'],
        $row['DateStart'],
        $row['DateEnd'],
        $row['Comments'];
        
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($db->getDbConn());
  }

?>