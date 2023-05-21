<?php

class Availability {
    //availability table parameters
    private $scheduleID;
    private $empID;
    private $lName;
    private $daysAvail;

    //constructor
    public function __construct($scheduleID, $empID, $lName, $daysAvail) {
        $this->scheduleID = $scheduleID;
        $this->empID = $empID;
        $this->lName = $lName;
        $this->daysAvail = $daysAvail;
    }

    //get and set availability properties
    public function getScheduleID() {
        return $this->scheduleID;
    }

    public function setScheduleID($val) {
        $this->scheduleID = $val;
    }

    public function getEmpID() {
        return $this->empID;
    }

    public function setEmpID($val) {
        $this->empID = $val;
    }

    public function getLName() {
        return $this->lName;
    }

    public function setLName($val) {
        $this->lName = $val;
    }

    public function getDaysAvail() {
        return $this->daysAvail;
    }

    public function setDaysAvail($val) {
        $this->daysAvail = $val;
    }
}