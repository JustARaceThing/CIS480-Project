<?php

class Schedule {
    //schedule table parameters
    private $assignmentID;
    private $empID;
    private $lName;
    private $hoursThisWeek;
    private $confirmed;

    //constructor
    public function __construct($assignmentID, $empID, $lName, $hoursThisWeek, $confirmed) {
        $this->assignmentID = $assignmentID;
        $this->empID = $empID;
        $this->lName = $lName;
        $this->hoursThisWeek = $hoursThisWeek;
        $this->confirmed = $confirmed;
    }

    //get and set schedule properties
    public function getAssignmentID() {
        return $this->assignmentID;
    }

    public function setAssignmentID($val) {
        $this->assignmentID = $val;
    }

    public function getEmpID() {
        return $this->empID;
    }

    public function setEmpID($val) {
        $this->empID = $val;
    }

    public function getLastName() {
        return $this->lName;
    }

    public function setLastName($val) {
        $this->lName = $val;
    }

    public function getHoursThisWeek() {
        return $this->hoursThisWeek;
    }

    public function setHoursThisWeek($val) {
        $this->hoursThisWeek = $val;
    }

    public function getConfirmed() {
        return $this->confirmed;
    }

    public function setConfirmed($val) {
        $this->confirmed = $val;
    }
}