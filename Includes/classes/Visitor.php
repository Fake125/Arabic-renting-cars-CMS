<?php
include_once ("Member.php");
class Visitor extends Member {
    public $ip;
    private $db;

    public function __construct() {
        global $db;
        $this -> db = $db;
    }

    public function login($username, $password) {
        $pre_user = @$this -> db -> Fetch("*", "users WHERE username='$username'");
        if (count($pre_user) == 1) {
            $o_user = $pre_user[0]["username"];
            $o_pass = $pre_user[0]["password"];
            if ($o_user == $username && $o_pass == $password)
                return ("yes");
            else
                return ("no");
        } else
            return ("no");

    }

    public static function sign_up($username, $fullname, $password, $email, $phone) {
        global $db;
        $check_user = @$db -> Fetch("*", "users WHERE username='$username'");
        $check_email = @$db -> Fetch("*", "users WHERE email='$email'");
        if (count($check_user) > 0 || count($check_email) > 0)
            return ("no");
        else {
             $db -> Insert("users", "username,password,fullname,email,phone", " '$username','$password','$fullname','$email','$phone' ");
            return ("yes");
        }

    }

    public static function Request($post_id, $fullname, $phone, $price,$date) {
        global $db;
        if ($db -> Insert("visitors_requests", "post_id,status,fullname,phone,price,date", " '$post_id','0','$fullname','$phone','$price','$date' ")=="yes")
            return "yes";
        else
            return "no";

    }

    public static function Reset($email) {
        global $db;
        if($db->Fetch("email","users WHERE email='$email' ") == "yes"){
            header("Location: ./index.php");
        }
  
    }

}
?>