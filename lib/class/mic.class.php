<?php

class mic{
    public $name;
    public $price;

    public function newPrice($price){
        print("New price is "."$price");
        print(" Old price is "."$this->price");
    }  
    public function setName($name){
        $this->name = ucwords($name);
        print($this->name);
    }
    // public function getName(){
    //     return $this->name;
    // }
}