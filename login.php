<?php
ob_start();
include_once("./Includes/config.php");
user_orinted(Storage::check_user());
$TITLE = (Storage::check_lang()=="ar") ? "تسجيل دخول" : "Login";
call_style(Storage::check_user(),Storage::check_lang(),"login.html");



?>