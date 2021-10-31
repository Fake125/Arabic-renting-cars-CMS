<?php
class Storage {

    public static function user_storage($user, $pass) {
        if (session_status() == 1)
            session_start();
        $_SESSION["user"] = $user . "_45" . $pass . "4";

    }

    public static function user_delete() {
        if (session_status() == 1)
            session_start();
        unset($_SESSION["user"]);
    }

    public static function check_user() {
        if (session_status() == 1)
            session_start();

        if (isset($_SESSION["user"])) {
            $ex = explode("_", $_SESSION["user"]);
            if (strlen($ex[0]) > 3) {
                return ($ex[0]);
            }
        } else
            return ("visitor");
    }

    public static function lang_store($lang) {
        if (session_status() == 1)
            session_start();
        $_SESSION["lang"] = $lang;
    }

    public static function check_lang() {
        if (session_status() == 1)
            session_start();
        if (isset($_SESSION["lang"])) {
            return ($_SESSION["lang"]);
        } else {
            return ("en");
        }

    }

    public static function check_admin() {
        if (session_status() == 1)
            session_start();

        if (isset($_SESSION["admin"])) {
            if ($_SESSION["admin"] == "yes")
                return ("yes");
        }
    }

}
?>