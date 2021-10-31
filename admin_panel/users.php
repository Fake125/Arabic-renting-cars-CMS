<?php
ob_start();
include_once ("../Includes/config.php");
include_once ("./controller.php");
admin_orinted();
if(isset($_GET["view"])){
    $user = Admin::get_user($_GET["view" ]);
    echo "
    <html dir='rtl'>
    ";
    include_once ("./style/parts/head.html");
    echo "
    <body>
    ";
    include_once ("./style/parts/nav.html");
    include_once ("./style/user_view.html"
);
        echo "
    </body>
</html>
";  
}
elseif(isset($_GET["history"])){
    $user = $_GET["history"];
    $reqs = Admin::get_requests_byuser($user);
        echo "
    <html dir='rtl'>
    ";
    include_once ("./style/parts/head.html");
    echo "
    <body>
    ";
    include_once ("./style/parts/nav.html");
    include_once ("./style/user_history.html"
);
        echo "
    </body>
</html>
";  
}
elseif(isset($_GET["delete"])){
    delete_user($_GET["delete"]);
}

elseif (isset($_GET["success"])) {
    success("./users.php");
}

elseif (isset($_GET["alert"])) {
send_alert($_GET["alert"]);
echo "<html dir='rtl'>";
include_once ("./style/parts/head.html");
echo "<body>";
include_once ("./style/parts/nav.html");
include_once ("./style/alert.html");
echo "
</body>
</html>";
}

else{
$users = Admin::get_users();
echo "<html dir='rtl'>";
include_once ("./style/parts/head.html");
echo "<body>";
include_once ("./style/parts/nav.html");
include_once ("./style/users.html");
echo "
</body>
</html>";
}
?>