<?php

class Schedule {
    //schedule table parameters
    private $assignmentID;
    private $empID;
    private $lName;

    private $daysWorking;

    private $shift;
    private $hoursThisWeek;
    

    //constructor
    public function __construct($assignmentID, $empID, $lName, $daysWorking, $shift, $hoursThisWeek ) {
        $this->assignmentID = $assignmentID;
        $this->empID = $empID;
        $this->lName = $lName;
        $this->daysWorking = $daysWorking;
        $this->$shift = $shift;
        $this->hoursThisWeek = $hoursThisWeek;
        
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

    public function getDaysWorking() {
        return $this->daysWorking;
    }

    public function setDaysWorking($val) {
        $this->daysWorking = $val;
    }

    public function getShift() {
        return $this->shift;
    }

    public function setShift($val) {
        $this->shift = $val;
    }
}