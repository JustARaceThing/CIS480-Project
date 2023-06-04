<?php
require_once('requests.php');
require_once('C:\xampp\htdocs\CIS480-Project\model/requests_db.php');

class RequestsController {
    //convert row from database into object
    private static function rowToRequests($row) {
        $requests = new Requests($row['RequestID'],
            $row['EmpName'],
            $row['EmpID'],
            $row['DateStart'],
            $row['DateEnd'],
            $row['Comments']);
        
        return $requests;
    }

    //get all requests values and store into an array
    public static function getAllRequests() {
        $queryRes = RequestsDB::getRequests();

        if ($queryRes) {
            $requests = array();
            foreach ($queryRes as $row) {
                $requests[] = self::rowToRequests($row);
            }

            return $requests;
        } else {
            return false;
        }
    }
}