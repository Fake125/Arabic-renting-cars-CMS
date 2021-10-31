<?php
ob_start();
include_once("../Includes/config.php");
include_once("./controller.php");
admin_orinted();
$count_posts = Admin::count_posts();
$count_users = Admin::count_users();
$count_requests = Admin::count_requests();
$count_newrequests = Admin::count_newrequests();



echo "<html>";
include_once("./style/parts/head.html");
echo "<body>";
include_once("./style/parts/nav.html");
include_once("./style/index.html");
echo"
</body>
</html>";
?>