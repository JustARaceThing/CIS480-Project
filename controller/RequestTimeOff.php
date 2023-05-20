<?php

require_once('../model/database.php'); //connecting to db

error_reporting(E_ERROR);

$db = new Database();

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
  header("Location: ../view/requests.php");
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($db->getDbConn());
}


?>