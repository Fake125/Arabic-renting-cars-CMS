<?php
ob_start();
include_once("./Includes/config.php");
$TITLE = (Storage::check_lang()=="ar") ? "التواصل معنا" : "Contact Us";
call_style(Storage::check_user(),Storage::check_lang(),"contact_us.html");

?>