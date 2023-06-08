<?php
require_once('database.php');

class RequestsDB {
    //function to get all requests info from database
    public static function getRequests() {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query
        if ($dbConn) {
            $query = "SELECT * FROM requests";

            //execute and return query
            return $dbConn->query($query);
        } else {
            return false;
        }
    }
}