<?php
ob_start();
include_once("./Includes/config.php");
$POSTS = Member::get_posts();
$TITLE = (Storage::check_lang()== "ar") ? get_sitetitle("ar") : get_sitetitle("");
call_style(Storage::check_user(),Storage::check_lang(),"index.html");
?>