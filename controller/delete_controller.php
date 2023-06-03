<?php

require_once('../model/database.php'); //connecting to db

error_reporting(E_ERROR);
?>


<html>
<p>
  <form method='POST' action=''>
            <h3>Assignment ID: <input type="text" name="AssignmentID"></h3>
            <input type="submit" value="submit" name="deleteSubmit">
        </form></p>
</html>

<?php 

$db = new Database();

$AssignmentID = (int)$_POST['AssignmentID'];




//sets var to drop into table.
$drop = "DELETE FROM schedule Where AssignmentID = '$AssignmentID'";


//checks conn and executes query
if (isset($_POST['deleteSubmit'])) {
if (mysqli_query($db->getDbConn(), $drop)) {
  header("Location: ../view/admin/schedule_admin.php");
} else {
  echo "Error: " . $drop . "<br>" . mysqli_error($db->getDbConn());
}
}
