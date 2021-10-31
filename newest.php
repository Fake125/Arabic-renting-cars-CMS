<?php
ob_start();
include_once ("./Includes/config.php");
$POSTS = Member::get_posts();
$TITLE = (Storage::check_lang()=="ar") ? "أحدث العروض" : "Newest Offers";
call_style(Storage::check_user(),Storage::check_lang(),"newest.html");
?>