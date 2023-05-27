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

    //function to get employee by password for login validation
    public static function getEmpByPw($password) {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query to retrieve data
        if ($dbConn) {
            $query = "SELECT * FROM employee
                        WHERE Password = '$password'";
            
            //execute and return for use outside of function
            $result =$dbConn->query($query);
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    //function to get all employee info from database
    public static function getEmployees() {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query
        if ($dbConn) {
            $query = "SELECT * FROM employee";

            //execute and return query
            return $dbConn->query($query);
        } else {
            return false;
        }
    }

    //function to add employee to database from sign-up page
    public static function addEmployee($firstName, $lastName, $username, $email, 
        $password, $dateHired) {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query
        if ($dbConn) {
            $query = "INSERT INTO employee
                    VALUES ('', '$firstName', '$lastName', '$username', '$email', '$password', 
                        '$dateHired', '3')";
            
            return $dbConn->query($query) === TRUE;
        } else {
            return false;
        }
    }

    //function to update employee after sign-up page
    public static function updateEmployee($firstName, $lastName,
        $dateHired, $password) 
    {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "UPDATE employee SET
                        FirstName = '$firstName',
                        LastName = '$lastName',
                        DateHired = '$dateHired'
                    WHERE Password = '$password'";
        
            return $dbConn->query($query) === TRUE;
        } else {
            return false;
        }
    }
}