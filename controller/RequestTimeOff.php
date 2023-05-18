<?php

require_once('../model/database.php'); //connecting to db

error_reporting(E_ERROR);

$db = new Database();

//takes var from local index.php test file. needs replaced to adapt to wepage.
$EmpName = $_REQUEST['name'];
$EmpID = $_REQUEST['ID'];
$StartDate = $_REQUEST['start'];
$EndDate = $_REQUEST['end'];
$Comments = $_REQUEST['comments'];


//sets var to insert into table
$insert = "INSERT INTO requests VALUES ('0', '$EmpName', '$EmpID', '$StartDate', '$EndDate', '$Comments')";

//debugging here.....
if (strlen($db->getDbError())):
     echo 'Connection Unsuccessful ' . $db->getDbError();
else:
     echo 'Connection Successful ' . $db->getDbName();
endif; 

//checks conn and executes query
if (mysqli_query($db->getDbConn(), $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>