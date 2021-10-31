<?php

function get_date() {
    $d = date('j F Y');
    return ($d);
}


function get_sitetitle($lang){
    global $db;
    $lang = ($lang == "ar") ? "_ar" : "";
    $title = $db->Fetch("content","contents WHERE page='title".$lang."'");
    return($title[0]["content"]);
}

// Starting call_style Function
function call_style($member_type, $lang, $first, $second = "", $third = "", $fourth = "") {
    $path = ($member_type == "visitor") ? "visitor" : "user";
    $r = ($lang == "ar") ? "dir='rtl'" : "";
    echo "<!DOCTYPE html>
<html $r >
";
    include_once ("./style/parts/head.html");
    echo "
<body>
";

    if ($lang == "ar") {
        $lang = "ar/";
    } else {
        $lang = "";
    }
    include_once ("./style/parts/$path/" . $lang . "header.html");
    include_once ("./style/parts/logo.html");
    include_once ("./style/parts/" . $lang . "nav.html");
    include_once ("./style/" . $lang . $first);
    if ($second != "")
        include_once ("./style/$second");
    if ($third != "")
        include_once ("./style/$third");
    if ($fourth != "")
        include_once ("./style/$fourth");
    include_once ("./style/parts/footer.html");
    echo "
</body>
";
    echo "</html>
";
}

// End call_style Function

// Start validate_login function

function validate_login() {
    if (isset($_POST["username"]) && isset($_POST["password"])) :
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $x = new Visitor();
        $check = $x -> login($user, $pass);
        if ($check == "yes") {
            Storage::user_storage($user, $pass);
            header("Location: ./index.php");

        } else {
            header("Location: ./login.php?error");

        }
    endif;

}

// End validate_login function

function register() {
    if (isset($_POST["register"])) :
        $username = $_POST["username"];
        $fullname = $_POST["fullname"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        if(Visitor::sign_up($username, $fullname, $password, $email, $phone)=="yes"){
        $_POST["username"] = $username;
        $_POST["password"] = $password;
        validate_login();
        }
        else{
            header("Location: ./sign_up.php?error");
        }
        endif;
}

function forget(){
    if(isset($_POST["reset"])):
        $email = $_POST["email"];
       Visitor::Reset($email);
    endif;
}


function user_orinted($result) {
    if ($result != "visitor") {
        header("Location: ./index.php");
    }

}

function had_seen($id){
    global $db;
    $db->Update("notifications","status='1'","id='$id'");
}

function request_orinted($per, $lang) {
    $lang = ($lang == "ar") ? "ar/" : "";
    include_once ("./style/parts/$per/" . $lang . "request.html");
}

function set_lang($lang) {
    $lang = ($lang == "ar") ? "ar" : "en";
    Storage::lang_store($lang);
    header("location: ./index.php");
}

function member_type() {
    $result = Storage::check_user();
    if ($result != "visitor")
        return ("user");
    else
        return ("visitor");
}

function visitor_request($id) {
    if (isset($_POST["request"])) :
        $phone = $_POST["phone"];
        $fullname = $_POST["fullname"];
        $price = $_POST["price"];
        if (Visitor::Request($id, $fullname, $phone, $price,get_date()) == "yes")
            header("Location: ./general.php?visitor_request");
    endif;
}

function user_request($id, $username) {
    if (isset($_POST["requestt"])) :
        $notes = $_POST["notes"];
        $price = $_POST["price"];
        if (User::request($username, $id, $notes, $price,get_date()) == "yes")
            header("Location: ./general.php?user_request");
    endif;
}

function logout() {
    Storage::user_delete();
    header("Location: ./index.php");
}

function get_aboutus($lang) {
    $x = new Member();
    echo $x -> display_aboutus($lang);
}

function get_contactus($lang) {
    $x = new Member();
    echo $x -> display_contactus($lang);
}

function get_policy($lang) {
    $x = new Member();
    echo $x -> display_ourpolicy($lang);
}

class view_post {
    public $post;
    public $lang;
    public function __construct($id, $lang) {
        $this -> post = Member::get_post($id);
        $this -> lang = ($lang == "ar") ? "_ar" : "";
    }

    public function get_title() {
        echo $this -> post["title" . $this -> lang];
    }
    public function return_title(){
        return($this -> post["title" . $this -> lang]);
    }

    public function get_desc() {
        echo $this -> post["description" . $this -> lang];
    }

    public function get_status() {
        echo $this -> post["car_status" . $this -> lang];
    }

    public function get_brand() {
        echo $this -> post["car_brand" . $this -> lang];
    }

    public function get_model() {
        echo $this -> post["car_model" . $this -> lang];
    }

    public function get_year() {
        echo $this -> post["car_year"];
    }

    public function get_color() {
        echo $this -> post["car_color" . $this -> lang];
    }

    public function get_related($num) {
        $related = explode(",", $this -> post["related_posts"]);
        echo($related[$num]);
    }

    public function count_related() {
        $related = explode(",", $this -> post["related_posts"]);
        return (count($related) - 1);
    }

    public function return_related($num) {
        $related = explode(",", $this -> post["related_posts"]);
        return ($related[$num]);
    }

    public function related_post($id) {
        $post = Member::get_post($id);
        echo $post["title" . $this -> lang];
    }

    public function get_related_img($id) {
        $post = Member::get_post($id);
        echo $post["img"];
    }

    public function get_img() {
        echo $this -> post["img"];
    }

    public function get_prices() {
        $pre_price = $this -> post["car_price" . $this -> lang];
        $price = explode("---", $pre_price);
        return ($price);
    }
    public function return_status(){
        return($this->post["car_status"]);
    }

}
?>