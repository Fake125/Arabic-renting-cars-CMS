<?php
class Car {
    public $brand;
    public $color;
    public $model;
    public $price;
    public $status;
    public $year;
    public $brand_ar;
    public $model_ar;
    public $color_ar;
    public $status_ar;
    public $price_ar;

    public function __construct($brand, $brand_ar, $color, $color_ar, $model, $model_ar, $price, $price_ar, $status, $status_ar, $year) {
        $this -> brand = $brand;
        $this -> color = $color;
        $this -> model = $model;
        $this -> price = $price;
        $this -> status = $status;
        $this -> year = $year;
        $this -> brand_ar = $brand_ar;
        $this -> color_ar = $color_ar;
        $this -> model_ar = $model_ar;
        $this -> price_ar = $price_ar;
        $this -> status_ar = $status_ar;
    }

}
?>