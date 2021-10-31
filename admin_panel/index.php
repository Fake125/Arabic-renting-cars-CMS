<?php
ob_start();
include_once("../Includes/config.php");
include_once("./controller.php");
admin_loginned();
admin_login();
echo "<html>";
include_once("./style/parts/head.html");
echo "<body>";
include_once("./style/login.html");

echo"
</body>
</html>";

?>