<?php
class Employee {
    //employee table parameters
    private $empID;
    private $fName;
    private $lName;
    private $eMail;
    private $password;
    private $dateHired;
    private $roleID;

    //constructor
    public function __construct($fName, $lName, $eMail, $password, $dateHired,
        $roleID, $empID = null) 
    {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->eMail = $eMail;
        $this->password = $password;
        $this->dateHired = $dateHired;
        $this->roleID = $roleID;
        $this->empID = $empID;
    }

    //get and set employee properties
    public function getEmpID() {
        return $this->empID;
    }

    public function setEmpID($val) {
        $this->empID = $val;
    }

    public function getFirstName() {
        return $this->fName;
    }

    public function setFirstName($val) {
        $this->fName = $val;
    }

    public function getLastName() {
        return $this->lName;
    }

    public function setLastName($val) {
        $this->lName = $val;
    }

    public function getEmail() {
        return $this->eMail;
    }

    public function setEmail($val) {
        $this->eMail = $val;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($val) {
        $this->password = $val;
    }

    public function getDateHired() {
        return $this->dateHired;
    }

    public function setDateHired($val) {
        $this->dateHired = $val;
    }

    public function getRoleID() {
        return $this->roleID;
    }

    public function setRoleID($val) {
        $this->roleID = $val;
    }
}