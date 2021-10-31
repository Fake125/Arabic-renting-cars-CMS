<?php
include_once ("Car.php");
class Post {
    public $id;
    public $description;
    public $keywords;
    public $related_posts;
    public $title;
    public $title_ar;
    public $description_ar;
    public $car;
    public $img;

    public function __construct($title, $title_ar, $description, $description_ar, $brand, $brand_ar, $color, $color_ar, $model, $model_ar, $price, $price_ar, $status, $status_ar, $year, $img) {

        $this -> title = $title;
        $this -> description = $description;
        $this -> title_ar = $title_ar;
        $this -> description_ar = $description_ar;
        $this -> img = $img;
        $this -> car = new Car($brand, $brand_ar, $color, $color_ar, $model, $model_ar, $price, $price_ar, $status, $status_ar, $year);
        $this -> get_keywords();

    }

    public function save() {
        global $db;
        $my_car = $this -> car;
        echo $db -> Insert("posts", "`title`, `img`, `description`, `car_brand`, `car_model`, `car_color`, `car_price`, `car_status`, `car_year`, `keywords`, `title_ar`, `description_ar`, `car_brand_ar`, `car_model_ar`, `car_color_ar`, `car_status_ar`, `car_price_ar`", "'$this->title', '$this->img', '$this->description', '$my_car->brand', '$my_car->model', '$my_car->color', '$my_car->price', '$my_car->status', '$my_car->year', '$this->keywords', '$this->title_ar', '$this->description_ar','$my_car->brand_ar','$my_car->model_ar', '$my_car->color_ar', '$my_car->status_ar', '$my_car->price_ar'");
        $pre_id = $db -> Fetch("MAX(id)", "posts");
        $this -> id = $pre_id[0]["MAX(id)"];
        self::get_related($this -> id);
        return ("yes");

    }

    public static function get_related($post_id) {
        global $db;
        $pre_post_keywords = $db -> Fetch("keywords", "posts WHERE id='$post_id' ");
        $post_keywords = explode(",", $pre_post_keywords[0]["keywords"]);
        $o_posts = Member::Search($post_keywords, $post_id);
        $nums = count($o_posts);
        $related_posts = array();
        $i = 0;
        foreach ($o_posts as $ids => $rank) :
            if ($i == 4)
                break;
            $related_posts[$i] = $ids;
            $i++;
        endforeach;

        $related = "";
        for ($x = 0; $x < count($related_posts); $x++) :
            $related = $related . $related_posts[$x] . ",";
        endfor;
        $db -> Update("posts", "related_posts='$related'", "id=$post_id");

    }

    public function get_keywords() {
        $title_divider = explode(" ", $this -> title);
        $title = "";
        for ($i = 0; $i < count($title_divider); $i++) :
            $title = ($i > 0) ? $title . "," : $title;
            $title = $title . $title_divider[$i];
        endfor;
        $desc_devider = explode(" ", $this -> description);
        $desc = "";
        for ($h = 0; $h < count($desc_devider); $h++) :
            $desc = ($h > 0) ? $desc . "," : $desc;
            $desc = $desc . $desc_devider[$h];
        endfor;
        $ar_title_divider = explode(" ", $this -> title_ar);
        $ar_title = "";
        for ($z = 0; $z < count($ar_title_divider); $z++) :
            $ar_title = ($z > 0) ? $ar_title . "," : $ar_title;
            $ar_title = $ar_title . $ar_title_divider[$z];
        endfor;
        $brand = $this -> car -> brand;
        $color = $this -> car -> color;
        $year = $this -> car -> year;
        $brand_ar = $this -> car -> brand_ar;
        $this -> keywords = "$brand,$title,$ar_title,$desc,$color,$year";
    }

}
?>