<?php
class Roles {
    //roles table parameters
    private $roleID;
    private $roleName;

    //constructor
    public function __construct($roleID, $roleName) {
        $this->roleID = $roleID;
        $this->roleName = $roleName;
    }

    //get and set roles values
    public function getRoleID() {
        return $this->roleID;
    }

    public function setRoleID($val) {
        $this->roleID = $val;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setRoleName($val) {
        $this->roleName = $val;
    }
}