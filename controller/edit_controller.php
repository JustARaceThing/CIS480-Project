

<?php

require_once('../model/database.php'); //connecting to db

error_reporting(E_ERROR);
?>


<html>
<p>
  <form method='POST' action=''>
            <h3>Assignment ID: <input type="text" name="AssignmentID"></h3>
            <h3>Days Working: <input type="text" name="DaysWorking"></h3>
            <h3>Shift: <input type="text" name="Shift"></h3>
            <input type="submit" value="submit" name="editSubmit">
        </form></p>
</html>

<?php 

$db = new Database();

$AssignmentID = (int)$_POST['AssignmentID'];
$DaysWorking = $_POST['DaysWorking'];
$Shift = (int)$_POST['Shift'];



//sets var to update into table.
$update = "UPDATE schedule SET  DaysWorking = '$DaysWorking', Shift = '$Shift' Where AssignmentID = '$AssignmentID'";


//checks conn and executes query
if (isset($_POST['editSubmit'])) {
if (mysqli_query($db->getDbConn(), $update)) {
  header("Location: ../view/editSchedule.php");
} else {
  echo "Error: " . $update . "<br>" . mysqli_error($db->getDbConn());
}
}


?>