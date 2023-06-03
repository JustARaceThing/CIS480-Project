<?php
require_once('schedule.php');
require_once('C:\xampp\htdocs\CIS480-Project\model/schedule_db.php');

class ScheduleController {
    //convert row from database into object
    private static function rowToSchedule($row) {
        $schedule = new Schedule($row['AssignmentID'],
            $row['EmpID'],
            $row['LastName'],
            $row['DaysWorking'],
            $row['Shift'],
            $row['Hours This Week']);
        
        return $schedule;
    }

    //get all requests values and store into an array
    public static function getAllSchedule() {
        $queryRes = ScheduleDB::getSchedule();

        if ($queryRes) {
            $schedule = array();
            foreach ($queryRes as $row) {
                $schedule[] = self::rowToSchedule($row);
            }

            return $schedule;
        } else {
            return false;
        }
    }
}