<?php
ob_start();
include_once("./Includes/config.php");
$TITLE = (Storage::check_lang()=="ar") ? "معلومات عنا" : "About Us";
call_style(Storage::check_user(),Storage::check_lang(),"about_us.html");
?>