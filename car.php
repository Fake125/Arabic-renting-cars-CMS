<?php
ob_start();
include_once ("./Includes/config.php");
if (isset($_GET["id"])) :
    $id = $_GET["id"];
    $POST = new view_post($id,Storage::check_lang());
    $TITLE = $POST->return_title();
    call_style(Storage::check_user(),Storage::check_lang() ,"car.html");
endif;
?>