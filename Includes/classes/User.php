<?php

class User extends Member {
    public $username;
    public $fullname;
    public $password;
    public $email;
    public $phone;

    public function __construct() {
        global $db;
        $this -> db = $db;
    }

    public function change_data($email = "", $password = "") {

    }

    public static function request($username, $post_id, $notes, $price,$date) {
        global $db;
        if ($db -> Insert("users_requests", "post_id,username,price,notes,response,status,date", " '$post_id','$username','$price' ,'$notes','0','0','$date' ")=="yes")
            return "yes";
        else
            return "no";

    }

    public static function get_notifications($username) {
        global $db;
        $nots = $db -> Fetch("*", "notifications WHERE username='$username' AND status='0' ");
        return ($nots);
    }

}
?>