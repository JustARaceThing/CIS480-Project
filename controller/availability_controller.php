<?php
require_once('availability.php');
require_once('C:\xampp\htdocs\CIS480-Project\model/availability_db.php');

class AvailabilityController {
    //convert row from database into object
    private static function rowToAvailability($row) {
        $availability = new Availability($row['scheduleID'],
            $row['EmpID'],
            $row['Last Name'],
            $row['Days Avail']);
        
        return $availability;
    }

    //get all availability values and store into an array
    public static function getAllAvail() {
        $queryRes = AvailabilityDB::getAvailability();

        if ($queryRes) {
            $availability = array();
            foreach ($queryRes as $row) {
                $availability[] = self::rowToAvailability($row);
            }

            return $availability;
        } else {
            return false;
        }
    }
}