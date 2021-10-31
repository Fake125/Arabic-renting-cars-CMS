<?php
ob_start();
include_once ("../Includes/config.php");
include_once ("./controller.php");
admin_orinted();
if (isset($_GET["title"])) {
    edit_setting("title");
    echo "<html dir='rtl'>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/title_editor.html");
    echo "
</body>
</html>";
} elseif (isset($_GET["aboutus"])) {
    edit_setting("aboutus");
    echo "<html dir='rtl'>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/aboutus_editor.html");
    echo "
</body>
</html>";
} elseif (isset($_GET["policy"])) {
    edit_setting("policy");
    echo "<html dir='rtl'>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/policy_editor.html");
    echo "
</body>
</html>";
} elseif (isset($_GET["contactus"])) {
    edit_setting("contactus");
    echo "<html dir='rtl'>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/contactus_editor.html");
    echo "
</body>
</html>";
} elseif (isset($_GET["success"])) {
    success("./setting.php");
} else {
    echo "<html>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/setting.html");
    echo "
</body>
</html>";
}
?>