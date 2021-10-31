<?php

function posting() {
    $all = array();
    $status_en = ($_POST["status"] == 1) ? "available" : "unavailable";
    $all["status_en"] = $status_en;
    $status_ar = ($_POST["status"] == 1) ? "متاحة" : "غير متاحة";
    $all["status_ar"] = $status_ar;
    $img = $_POST["img"];
    $all["img"] = $img;
    $year = $_POST["year"];
    $all["year"] = $year;
    $title_ar = $_POST["title_ar"];
    $all["title_ar"] = $title_ar;
    $desc_ar = $_POST["desc_ar"];
    $all["desc_ar"] = $desc_ar;
    $brand_ar = $_POST["brand_ar"];
    $all["brand_ar"] = $brand_ar;
    $model_ar = $_POST["model_ar"];
    $all["model_ar"] = $model_ar;
    $color_ar = $_POST["color_ar"];
    $all["color_ar"] = $color_ar;
    $prices_ar = "";
    for ($i = 0; $i < 15; $i++) {
        $from = $_POST["ar_from_$i"];
        $to = $_POST["ar_to_$i"];
        $euro = $_POST["ar_euro_$i"];
        $dollar = $_POST["ar_dollar_$i"];
        if ($from != "" || $to != "" || $euro != "" || $dollar != "") {
            $prices_ar = $prices_ar . $from . "::" . $to . "::" . "$euro" . "::" . $dollar . "---";
        } else {
            break;
        }
    }
    $all["price_ar"] = $prices_ar;
    $title = $_POST["title"];
    $all["title"] = $title;
    $desc = $_POST["desc"];
    $all["desc"] = $desc;
    $brand = $_POST["brand"];
    $all["brand"] = $brand;
    $model = $_POST["model"];
    $all["model"] = $model;
    $color = $_POST["color"];
    $all["color"] = $color;
    $prices_en = "";
    for ($i = 0; $i < 15; $i++) {
        $from = $_POST["from_$i"];
        $to = $_POST["to_$i"];
        $euro = $_POST["euro_$i"];
        $dollar = $_POST["dollar_$i"];
        if ($from != "" || $to != "" || $euro != "" || $dollar != "") {
            $prices_en = $prices_en . $from . "::" . $to . "::" . "$euro" . "::" . $dollar . "---";
        } else {
            break;
        }
    }
    $all["price"] = $prices_en;
    return ($all);
}

function add_post() {

    if (isset($_POST["offer"])) :
        $data = posting();
       $pr = $data["price"];
       $price = explode("---",$pr);
       echo count($price);
      /*  $new_post = new Post($data["title"], $data["title_ar"], $data["desc"], $data["desc_ar"], $data["brand"], $data["brand_ar"], $data["color"], $data["color_ar"], $data["model"], $data["model_ar"], $data["price"], $data["price_ar"], $data["status_en"], $data["status_ar"], $data["year"], $data["img"]);
        if ($new_post -> save() == "yes") {
            header("Location: ?success");
        }*/
    endif;

}

function edit_post() {
    if (isset($_POST["edit"])) :
        global $id;
        $data = posting();
        $just = Admin::edit_post($id, $data['status_ar'], $data["status_en"], $data["year"], $data["img"], $data["title_ar"], $data["desc_ar"], $data["brand_ar"], $data["model_ar"], $data["color_ar"], $data["price_ar"], $data["title"], $data["desc"], $data["brand"], $data["model"], $data["color"], $data["price"]);
        //Admin::edit_post($id,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);
        if ($just == "yes") {
            header("Location: ?success");
        }
    endif;
}

function delete_post() {
    global $id;
    if (Admin::delete_post($id)) {
        header("Location: ?success");
    }
}

function edit_setting($s) {
    if (isset($_POST["set"])) :
        $ar = $_POST["ar"];
        $en = $_POST["en"];
        if ($s == "aboutus") {
            Admin::edit_aboutus($ar, $en);
            header("Location: ?success");
        } elseif ($s == "title") {
            Admin::edit_title($ar, $en);
            header("Location: ?success");

        } elseif ($s == "contactus") {
            Admin::edit_contactus($ar, $en);
            header("Location: ?success");

        } elseif ($s == "policy") {
            Admin::edit_policy($ar, $en);
            header("Location: ?success");

        }
    endif;
}

function admin_login() {
    if (isset($_POST["admin_login"])) :
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $my_user = "x";
        $my_password = "x";
        if ($user == $my_user && $pass == $my_password) {
            session_start();
            $_SESSION["admin"] = "yes";
            header("Location: ./cp.php");
        }

    endif;
}

function admin_orinted() {
    if (Storage::check_admin() != "yes") {
        header("Location: ./index.php");
    }
}

function admin_loginned() {
    if (Storage::check_admin() == "yes") {
        header("Location: ./cp.php");
    }

}

function send_response($user, $post, $req) {
    if (isset($_POST["response"])) :
        $dec = ($_POST["dec"] == 0) ? "refused" : "accepted";
        $notes = $_POST["notes"];
        if (Admin::send_response($dec, $user, $post, $notes, $req))
            header("Location: ?success");
    endif;
}

function send_alert($user) {
    if (isset($_POST["alert"])) :
        $notes = $_POST["notes"];
        if (Admin::send_response("alert", $user, " ", $notes, "s"))
            header("Location: ?success");
    endif;
}

function delete_user($user) {
    if (Admin::delete_user($user) == "yes")
        header("Location: ?success");
}

function success($url) {
    include_once ("./style/parts/head.html");
    echo '<center><span class="label label-success">تم</span></center>';
    echo "<meta http-equiv='refresh' content='2; url=$url' />";
}
?>