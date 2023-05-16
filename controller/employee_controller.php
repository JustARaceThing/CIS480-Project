<?php
require_once('employee.php');
require_once('../model/employee_db.php');

class EmployeeController {
    //convert row from database into Employee object
    private static function rowToEmployee($row) {
        $employee = new Employee($row['FirstName'],
            $row['LastName'],
            $row['Email'],
            $row['Password'],
            $row['DateHired'],
            $row['Department'],
            $row['EmpID']);
        return $employee;
    }

    //verify username and password for employee
    public static function validEmployee($email, $password) {
        $queryRes = EmployeeDB::getEmpByEmail($email);

        if ($queryRes) {
            $employee = self::rowToEmployee($queryRes);
            if ($employee->getPassword() === $password) {
                return $employee->getDepartment();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}