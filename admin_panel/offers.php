<?php
ob_start();
include_once ("../Includes/config.php");
include_once ("./controller.php");
admin_orinted();
if (isset($_GET["ADD"])) {
    add_post();
    echo "<html>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/add_post.html");
    echo "
</body>
</html>";

} elseif (isset($_GET["edit"])) {
    $id = $_GET["edit"];
    edit_post();
    $post = Member::get_post($id);
    function display_prices($lang = "") {
        global $post;
        $c = ($lang == "") ? "" : "_ar";
        $prices = explode("---", $post["car_price" . $c]);
        unset($prices[count($prices) - 1]);
        return ($prices);
    }

    $price_ar = display_prices("ar");
    $price_en = display_prices();

    echo "<html>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/edit_post.html");
    echo "
</body>
</html>";
} 

elseif(isset($_GET["delete"])){
    $id = $_GET["delete"];
    delete_post();
}

elseif(isset($_GET["success"])){
    success("./offers.php");
}

else {

    $posts = Admin::display_posts();

    echo "<html>";
    include_once ("./style/parts/head.html");
    echo "<body>";
    include_once ("./style/parts/nav.html");
    include_once ("./style/offers.html");
    echo "
</body>
</html>";
}
?>