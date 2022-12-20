<?php
include_once __DIR__ . "/../traits/trait_employee.php";
class employee {
    use worker;
    public $img;
    public $name;
    public $lastname;
    public $place;

    public function __construct($img,$name,$lastname,$place,$empofmonth){
        $this->img = $img;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->place = $place;
        $this->empofmonth = $empofmonth;
    }
}