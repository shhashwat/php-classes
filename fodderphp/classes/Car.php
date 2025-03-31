<?php

class Car{
    private $brand;
    private $color;
    private $vehichileType = "Car";

    //constructor
    public function __construct($brand, $color){
        $this->brand = $brand;
        $this->color = $color;
    }

    //getters and setters
    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($brand){
        return $this->brand = $brand;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $allowedColors = [
            "Red",
            "Green",
            "Blue",
            "Gray"
        ];
        if(in_array($color, $allowedColors)){
            $this->color = $color;
        }
    }

    //method
    public function getCarInfo($brand, $color){
        return "Brand is: ". $brand ." The color is: ". $color ."";
    }
}