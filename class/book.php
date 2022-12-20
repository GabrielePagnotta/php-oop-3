<?php
    include_once __DIR__ . "/main.php";
class book extends main{
    public $format;
    public $year;
    public $author;
    public $genre;


    public function __construct(
        string $img,
        string $name,
        float $price,
        string $year,
        string $author,
        string $genre,
        string $format
    ){
        $this->year = $year;
        $this->author = $author;
        $this->genre = $genre;
        $this->format = $format;
        parent:: __construct($img,$name, $price);
    }
}