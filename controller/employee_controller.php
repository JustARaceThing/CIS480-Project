<?php
require_once('employee.php');
require_once('C:\xampp\htdocs\CIS480-Project\model/employee_db.php'); //use absolute file path

class EmployeeController {
    //convert row from database into Employee object
    private static function rowToEmployee($row) {
        $employee = new Employee($row['EmpID'],
            $row['FirstName'],
            $row['LastName'],
            $row['Username'],
            $row['Email'],
            $row['Password'],
            $row['DateHired'],
            $row['RoleID']);
        return $employee;
    }

    //verify username and password for employee
    public static function validEmployee($email, $password) {
        $queryRes = EmployeeDB::getEmpByEmail($email);

        if ($queryRes) {
            $employee = self::rowToEmployee($queryRes);
            if ($employee->getPassword() === $password) {
                return $employee->getRoleID();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //get all employee values and store into an array
    public static function getAllEmployees() {
        $queryRes = EmployeeDB::getEmployees();

        if ($queryRes) {
            $employees = array();
            foreach ($queryRes as $row) {
                $employees[] = self::rowToEmployee($row);
            }

            return $employees;
        } else {
            return false;
        }
    }

    public static function updatePass($email, $password) {
        return EmployeeDB::updatePassword($email, $password);
    }
}