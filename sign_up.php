<?php
ob_start();
include_once("./Includes/config.php");
user_orinted(Storage::check_user());
register();
$TITLE = (Storage::check_lang()=="ar") ? "تسجيل حساب" : "Sign Up";
call_style(Storage::check_user(),Storage::check_lang(),"register.html");
?>