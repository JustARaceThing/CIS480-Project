<?php
require_once('database.php');

class RolesDB {
    //get all roles info from database
    public static function getRoles() {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query
        if ($dbConn) {
            $query = "SELECT * FROM roles";

            //return query
            return $dbConn->query($query);
        } else {
            return false;
        }
    }
}