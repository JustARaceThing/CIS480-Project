<?php

require_once('../model/database.php'); //connecting to db

error_reporting(E_ERROR);
?>


<html>
<p>
  <form method='POST' action=''> 
            <h3>Employee ID: <input type="text" name="EmpID"></h3>
            <h3>Last Name: <input type="text" name="LastName"></h3>
            <h3>Days Working: <input type="text" name="DaysWorking"></h3>
            <h3>Shift: <input type="text" name="Shift"></h3>
            <input type="submit" value="Submit" name="addSubmit">
        </form></p>
</html>

<?php 

$db = new Database();


$EmpID = $_POST['EmpID'];
$LastName = $_POST['LastName'];
$DaysWorking = $_POST['DaysWorking'];
$Shift = (int)$_POST['Shift'];
$HoursThisWeek = 40;



//sets var to insert into table.
$insert = "INSERT INTO schedule VALUES ('0', '$EmpID', '$LastName', '$DaysWorking', '$Shift','$HoursThisWeek')";


//checks conn and executes query
if (isset($_POST['addSubmit'])) {
if (mysqli_query($db->getDbConn(), $insert)) {
  header("Location: ../view/admin/schedule_admin.php");
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($db->getDbConn());
}
}


?>