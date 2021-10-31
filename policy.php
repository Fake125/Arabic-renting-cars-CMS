<?php
ob_start();
include_once("./Includes/config.php");
$TITLE = (Storage::check_lang()=="ar") ? "سياستنا" : "Our Policy";
call_style(Storage::check_user(),Storage::check_lang(),"policy.html");
?>