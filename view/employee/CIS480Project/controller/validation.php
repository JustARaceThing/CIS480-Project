<?php
class Validation {
    //function to check complexity of password for sign-up page
    public static function pwValid($val) {
        if (strlen($val) > 0) {
            $regex="/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%?]{5,15}$/";
            if (!preg_match($regex, $val)) {
                return "Invalid Format";
            } else {
                return '';
            }
        }
    }
};

