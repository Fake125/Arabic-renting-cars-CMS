<?php
ob_start();
include_once ("./Includes/config.php");

if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
    set_lang($lang);
} elseif (isset($_GET["visitor_request"])) {
    call_style(Storage::check_user(), Storage::check_lang(), "visitor_request.html");
} elseif (isset($_GET["user_request"])) {
    call_style(Storage::check_user(), Storage::check_lang(), "user_request.html");
} elseif (isset($_GET["logout"])) {
    logout();
}
?>