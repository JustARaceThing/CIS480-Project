<?php
require_once('database.php');

class EmployeeDB {
    //function to get employee by email for login validation
    public static function getEmpByEmail($email) {
        //get databse connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query to retrieve data
        if ($dbConn) {
            $query = "SELECT * FROM employee
                        WHERE Email = '$email'";
            
            //execute and return the query for use outside of function
            $result = $dbConn->query($query);
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}