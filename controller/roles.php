<?php
class Roles {
    //roles table parameters
    private $roleID;
    private $roleName;
    private $canEdit;
    private $canView;
    private $canApprove;

    //constructor
    public function __construct($roleName, $canEdit, $canView, $canApprove) {
        $this->roleName = $roleName;
        $this->canEdit = $canEdit;
        $this->canView = $canView;
        $this->canApprove = $canApprove;
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

    public function getCanEdit() {
        return $this->canEdit;
    }

    public function setCanEdit($val) {
        $this->canEdit = $val;
    }

    public function getCanView() {
        return $this->canView;
    }

    public function setCanView($val) {
        $this->canView = $val;
    }

    public function getCanApprove() {
        return $this->canApprove;
    }

    public function setCanApprove($val) {
        $this->canApprove = $val;
    }
}