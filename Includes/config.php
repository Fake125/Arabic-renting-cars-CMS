<?php
define("PATH","C:/xampp/htdocs/all/Cars/");
include_once(PATH . "/Includes/DataBase.php");
include_once(PATH . "Includes/view_core.php");
include_once(PATH . "Includes/classes/Visitor.php");
include_once(PATH . "Includes/classes/Member.php");
include_once(PATH . "Includes/classes/Post.php");
include_once(PATH . "Includes/classes/User.php");
include_once(PATH . "Includes/classes/Admin.php");
include_once(PATH . "Includes/storage_layer.php");
$db = new DataBase('localhost','root','','cars');

?>
