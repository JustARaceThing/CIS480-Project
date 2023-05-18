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

$db->$sql = "INSERT INTO requests VALUES ('0', '$EmpName', '$EmpID', '$StartDate', '$EndDate', '$Comments')";

//We can connect to db successfully....SQL query is not doing anything right now
if (strlen($db->getDbError())):
     echo 'Connection Unsuccessful ' . $db->getDbError();
else:
     echo 'Connection Successful ' . $db->getDbName();
endif; 


?>