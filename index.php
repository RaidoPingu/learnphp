<?php

// liubrary 

class box {
    public $size;
    public static $number;

    public static function getNumber(){
        echo self::$number

    }
    public function getSize(){
        echo $this->size .self::$number
    }

    
}

$box1 = new box();
$box1->size = 10;
$box1::$number = 10;
$box2=new box();
$box2->size = 20;
$box2::$number =20;
var_dump($box1, $box2);
var_dump($box1::$number, $box2::$number);

?>


