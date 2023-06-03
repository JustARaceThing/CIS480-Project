<?php
require_once('roles.php');
require_once('C:\xampp\htdocs\CIS480-Project\model/roles_db.php');

class RolesController {
    //convert row from database into Roles onject
    public static function rowToRoles($row) {
        $roles = new Roles($row['RoleID'],
            $row['RoleName']);
        
            return $roles;
    }

    //get all role values and store into an array
    public static function getAllRoles() {
        $queryRes = RolesDB::getRoles();

        if ($queryRes) {
            $roles = array();
            foreach($queryRes as $row) {
                $roles[] = self::rowToRoles($row);
            }

            return $roles;
        } else {
            return false;
        }
    }
}