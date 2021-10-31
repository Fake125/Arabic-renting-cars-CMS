<?php
class Admin {

    public static function count_posts() {
        global $db;
        $posts = $db -> Fetch("COUNT(id)", "posts");
        return ($posts[0]["COUNT(id)"]);
    }

    public static function count_users() {
        global $db;
        $users = $db -> Fetch("COUNT(id)", "users");
        return ($users[0]["COUNT(id)"]);
    }

    public static function count_requests() {
        global $db;
        $v_req = $db -> Fetch("COUNT(id)", "visitors_requests");
        $u_req = $db -> Fetch("COUNT(id)", "users_requests");
        $num = $v_req[0]["COUNT(id)"] + $u_req[0]["COUNT(id)"];
        return ($num);
    }

    public static function count_newrequests() {
        global $db;
        $v_req = $db -> Fetch("COUNT(id)", "visitors_requests WHERE status=0");
        $u_req = $db -> Fetch("COUNT(id)", "users_requests WHERE status=0");
        $num = $v_req[0]["COUNT(id)"] + $u_req[0]["COUNT(id)"];
        return ($num);
    }

    public static function display_posts() {
        global $db;
        $posts = $db -> Fetch("*", "posts");
        return ($posts);
    }

    public static function edit_post($id, $status_ar, $status, $year, $img, $title_ar, $desc_ar, $brand_ar, $model_ar, $color_ar, $price_ar, $title, $desc, $brand, $model, $color, $price) {
        global $db;
        if ($db -> Update("posts", "car_status_ar='$status_ar',car_status='$status',car_year='$year',img='$img',title_ar='$title_ar',description_ar='$desc_ar',car_brand_ar='$brand_ar',car_model_ar='$model_ar',car_color_ar='$color_ar',car_price_ar='$price_ar',title='$title',description='$desc',car_brand='$brand',car_model='$model',car_color='$color',car_price='$price'", "id='$id'")) {
            return ("yes");

        }
        //echo $db->Update("posts","car_status_ar='$status_ar'","id='$id'");
    }

    public static function get_title($lang) {
        $lang = ($lang == "ar") ? "_ar" : "";
        global $db;
        $h = $db -> Fetch("content", "contents WHERE page='title" . $lang . "'");
        echo $h[0]["content"];
    }

    public static function delete_post($id) {
        global $db;
        if ($db -> Delete("posts", "id='$id'")) {
            return ("yes");
        }
    }

    public static function edit_aboutus($ar, $en) {
        global $db;
        $db -> Update("contents", "content='$en'", "page='aboutus'");
        $db -> Update("contents", "content='$ar'", "page='aboutus_ar'");
    }

    public static function edit_contactus($ar, $en) {
        global $db;
        $db -> Update("contents", "content='$en'", "page='contactus'");
        $db -> Update("contents", "content='$ar'", "page='contactus_ar'");
    }

    public static function edit_policy($ar, $en) {
        global $db;
        $db -> Update("contents", "content='$en'", "page='policy'");
        $db -> Update("contents", "content='$ar'", "page='policy_ar'");
    }

    public static function edit_title($ar, $en) {
        global $db;
        $db -> Update("contents", "content='$en'", "page='title'");
        $db -> Update("contents", "content='$ar'", "page='title_ar'");
    }

    public static function get_requests($status) {
        global $db;
        $u = $db -> Fetch("*", "users_requests WHERE status='$status'");
        $v = $db -> Fetch("*", "visitors_requests WHERE status='$status'");
        $all = array();
        $all[0] = $u;
        $all[1] = $v;
        return ($all);
    }

    public static function get_request($type, $id) {
        $type = ($type == "u") ? "users_requests" : "visitors_requests";
        global $db;
        $req = $db -> Fetch("*", "$type WHERE id='$id'");
        if ($type == "users_requests")
            $db -> Update("users_requests", "status='1'", "id='$id'");
        elseif ($type == "visitors_requests")
            $db -> Update("visitors_requests", "status='1'", "id='$id'");
        return ($req[0]);
    }

    public static function send_response($type, $username, $post_id, $notes, $req) {
        global $db;
        if ($db -> Insert("notifications", "type,post_id,username,notes,status", " '$type','$post_id','$username','$notes','0' ")) {
            if ($db -> Update("users_requests", "response='1'", "id='$req'")) {
                return ("yes");
            }
        }
    }

    public static function get_num_requests_byuser($username) {
        global $db;
        $num = $db -> Fetch("COUNT(id)", "users_requests WHERE username='$username'");
        return ($num[0]["COUNT(id)"]);
    }

    public static function get_users() {
        global $db;
        $users = $db -> Fetch("*", "users");
        return ($users);
    }

    public static function get_user($user) {
        global $db;
        $user = $db -> Fetch("*", "users WHERE username='$user'");
        return ($user[0]);
    }

    public static function get_requests_byuser($username) {
        global $db;
        $req = $db -> Fetch("*", "users_requests WHERE username='$username'");
        return ($req);
    }

    public static function delete_user($user) {
        global $db;
        if ($db -> Delete("users", "username='$user'"))
            return ("yes");
    }

}
?>