<?php

class Member {
    private $db;
    public $lang;

    function __construct() {
        global $db;
        $this -> db = $db;
    }

    public function display_aboutus($lang) {
        $lang = ($lang == "ar") ? "_ar" : "";
        $content = $this -> db -> Fetch("content", "contents WHERE page='aboutus" . $lang . "'");
        return ($content[0]["content"]);
    }

    public function display_contactus($lang) {
        $lang = ($lang == "ar") ? "_ar" : "";
        $content = $this -> db -> Fetch("content", "contents WHERE page='contactus" . $lang . "'");
        return ($content[0]["content"]);
    }

    public function display_ourpolicy($lang) {
        $lang = ($lang == "ar") ? "_ar" : "";
        $content = $this -> db -> Fetch("content", "contents WHERE page='policy" . $lang . "'");
        return ($content[0]["content"]);
    }

    public static function Search($keywords, $idd = "!@#$") {
        $posts_ranks = array();
        global $db;
        $posts = $db -> Fetch("*", "posts");
        for ($i = 0; $i < count($posts); $i++) :
            if ($posts[$i]["id"] == $idd)
                continue;
            $post_keywords = explode(",", $posts[$i]["keywords"]);
            $post_rank = 0;
            for ($h = 0; $h < count($keywords); $h++) {
                for ($z = 0; $z < count($post_keywords); $z++) :
                    $comparsion = strcasecmp($post_keywords[$z], $keywords[$h]);
                    if ($comparsion == 0)
                        $post_rank++;
                endfor;
            }
            $post_id = $posts[$i]["id"];
            $posts_ranks[$post_id] = $post_rank;
        endfor;
        arsort($posts_ranks);
        return ($posts_ranks);
    }

    public static function get_post($id) {
        global $db;
        $post = $db -> Fetch("*", "posts WHERE id='$id' ");
        return ($post[0]);
    }

    public static function get_posts() {
        global $db;
        $posts = $db -> Fetch("*", "posts");
        return ($posts);
    }

}

//$x = new Member();
/*$keys = array("خالد", "احمد", "محمد");
 $z = $x -> Search($keys);

 foreach($z as $hh => $x_value) {
 echo "Key=" . $hh . ", Value=" . $x_value;
 echo "<br>";
 }
 */
/*$s = MeMber::get_post(14);
 echo $s["keywords"];*/
?>