<?php
//Database class
class Database {
    //connection parameters
    private $host = 'localhost';
    private $dbname = 'cis480';
    private $username = 'johhen5111';
    private $password = 'password';

    //database connection and error message
    private $conn;
    private $conn_error = '';

    //constructor
    function __construct() {
        //handling errors manually - turned them off
        mysqli_report(MYSQLI_REPORT_OFF);

        //connect to database
        $this->conn = mysqli_connect($this->host, $this->username, $this->password,
            $this->dbname);

        //failure to connect to database error message
        if ($this->conn === false) {
            $this->conn_error = "Failed to connect to Database: " 
                . mysqli_connect_error();
        }
    }

    function __destruct() {
        mysqli_close($this->conn);
    }

    //get values for db parameters
    function getDbConn() {
        return $this->conn;
    }

    function getDbError() {
        return $this->conn_error;
    }

    function getDbHost() {
        return $this->host;
    }

    function getDbName() {
        return $this->dbname;
    }

    function getDbUser() {
        return $this->username;
    }

    function getDbUserPw() {
        return $this->password;
    }
}