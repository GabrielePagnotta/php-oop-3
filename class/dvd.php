<?php

include_once __DIR__. "/main.php";
include_once __DIR__ . "/../traits/trait_dvd.php";

class dvd extends main {
    use quality;
    public $year;
    public $author;
    public $genre;

    public function __construct(
        string $img,
        string $name,
        float $price,
        int $year, 
        string $author, 
        string $genre,
        string $quality
        ){
        $this->quality =$quality;
        $this->year = $year;
        $this->author = $author;
        $this->genre = $genre;
        parent::__construct($img,$name, $price);
    }
    
   
}

