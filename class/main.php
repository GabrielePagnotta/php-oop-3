<?php

class main{
    public $img;
    public $name;
    public $price;

    public function __construct(string $img,string $name,float $price){
        $this->img = $img;
        $this->name = $name;
        $this->price = $price;
    }
}

