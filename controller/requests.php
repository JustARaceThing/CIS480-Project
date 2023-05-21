<?php

class Requests {
    //requests table parameters
    private $requestID;
    private $empName;
    private $empID;
    private $dateStart;
    private $dateEnd;
    private $comments;

    //constructor
    public function __construct($requestID, $empName, $empID, $dateStart, $dateEnd, $comments) {
        $this->requestID = $requestID;
        $this->empName = $empName;
        $this->empID = $empID;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
        $this->comments = $comments;
    }

    //get and set requests properties
    public function getRequestID() {
        return $this->requestID;
    }

    public function setRequestID($val) {
        $this->requestID = $val;
    }

    public function getEmpName() {
        return $this->empName;
    }

    public function setEmpName($val) {
        $this->empName = $val;
    }

    public function getEmpID() {
        return $this->empID;
    }

    public function setEmpID($val) {
        $this->empID = $val;
    }

    public function getDateStart() {
        return $this->dateStart;
    }

    public function setDateStart($val) {
        $this->dateStart = $val;
    }

    public function getDateEnd() {
        return $this->dateEnd;
    }

    public function setDateEnd($val) {
        $this->dateEnd = $val;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments($val) {
        $this->comments = $val;
    }
}