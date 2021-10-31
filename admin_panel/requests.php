<?php
ob_start();
include_once ("../Includes/config.php");
include_once ("./controller.php");
admin_orinted();
if (isset($_GET["u_request"])) {
    $id = $_GET["u_request"];
    $req = Admin::get_request("u", $id);
    echo "
    <html dir='rtl'>
    ";
    include_once ("./style/parts/head.html");
    echo "
    <body>
    ";
    include_once ("./style/parts/nav.html");
    include_once ("./style/u_request.html");
    echo "
    </body>
</html>
";
} elseif (isset($_GET["v_request"])) {
    $id = $_GET["v_request"];
    $req = Admin::get_request("v", $id);
    echo "
    <html dir='rtl'>
    ";
    include_once ("./style/parts/head.html");
    echo "
<body>
    ";
    include_once ("./style/parts/nav.html");
    include_once ("./style/v_request.html");
    echo "
</body>
</html>
";
} elseif (isset($_GET["response"]) && isset($_GET["user"]) && isset($_GET["req"])) {
    $user = $_GET["user"];
    $post_id = $_GET["response"];
    send_response($user, $post_id, $_GET["req"]);
    echo "
    <html dir='rtl'>
    ";
    include_once ("./style/parts/head.html");
    echo "
    <body>
    ";
    include_once ("./style/parts/nav.html");
    include_once ("./style/response.html");
    echo "
    </body>
    </html>
    ";
} elseif (isset($_GET["success"])) {
    success("./requests.php");
} else {
    $new = Admin::get_requests(0);
    $old = Admin::get_requests(1);
    echo "
    <html dir='rtl'>
    ";
    include_once ("./style/parts/head.html");
    echo "
    <body>
    ";
    include_once ("./style/parts/nav.html");
    include_once ("./style/requests.html");
    echo "
    </body>
    </html>
    ";
}
?>