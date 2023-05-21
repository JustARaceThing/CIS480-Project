<?php
require_once('database.php');

class ScheduleDB {
    //function to get all schedule info from database
    public static function getSchedule() {
        //get database connection
        $db = new Database();
        $dbConn = $db->getDbConn();

        //query
        if ($dbConn) {
            $query = "SELECT * FROM schedule";

            //execute and return query
            return $dbConn->query($query);
        } else {
            return false;
        }
    }
}