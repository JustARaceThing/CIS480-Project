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

//checks conn and executes query
if (mysqli_query($db->getDbConn(), $insert)) {
  echo "Time off Request submitted!";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}


?>