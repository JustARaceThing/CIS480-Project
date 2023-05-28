<?php
class Employee {
    //employee table parameters
    private $empID;
    private $fName;
    private $lName;
    private $username;
    private $eMail;
    private $password;
    private $dateHired;
    private $roleID;

    //constructor
    public function __construct($empID, $fName, $lName, $username, $eMail, $password, $dateHired,
        $roleID) 
    {
        $this->empID = $empID;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->username = $username;
        $this->eMail = $eMail;
        $this->password = $password;
        $this->dateHired = $dateHired;
        $this->roleID = $roleID;
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

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($val) {
        $this->username = $val;
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