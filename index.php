
<?php

class box {
    public $with;
    public $height;
    public $lenght;
    public $material;

    public function describe() {
        echo '$with ' . $this->with . " heaight " . $this->height . ' lenght ' . $this->lenght;
    }
}

class MetalBex extends box {
    public $material = 'Metal';
    public $weight;

    public function volume(){
        return $this->width * $this->lenght * $this-> height;
    }

}

trait HasSmell {
    public $smell;
    public function sniff(){
        if($this->smell !=='bad'){
            return 'Fine';
        }
        return 'bad';
    }
}


class Animal {
    use HasSmell;
}

$Metalbox1 = new Metalbox();
var_dump($Metalbox1);

?>


