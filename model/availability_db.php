<?php
require_once('database.php');

class AvailabilityDB {
    //function to get all availability info from database
    public static function getAvailability() {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query
        if ($dbConn) {
            $query = "SELECT * FROM availability";

            //execute and return query
            return $dbConn->query($query);
        } else {
            return false;
        }
    }
}